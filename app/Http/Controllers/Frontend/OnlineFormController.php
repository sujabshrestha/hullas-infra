<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Form;
use App\Model\FormSubmission;
use App\Repositories\AdminForm\FormInterface;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class OnlineFormController extends Controller
{
    protected $form;
    public function __construct(FormInterface $form)
    {
        $this->form = $form;
    }

    public function selectionPage(){
        return view('frontEnd.onlineForm.selection_page');
    }

    public function onlineEntry($slug){
        $formType = $this->form->findFormTypeBySlug($slug);
        if(!$formType){
            Toastr::error('Form not found','Error');
            return redirect('/');
        }
        $forms = $formType->forms;
        if(hasFormSession($formType->id)){
            $formUser = sessionFormUser();
            $formSubmissions = $this->form->userSubmissionsByFormType($formUser, $formType);
            $form_ids = $forms->pluck('id')->toArray() ?? [];
            foreach ($formSubmissions as $submission){
                if(in_array($submission->form_id,$form_ids)){
                    $forms->where('id',$submission->form_id)->first()->hasSubmission = 1;
                }
            }
            return view('frontEnd.onlineForm.new_form', compact('formType','forms','formSubmissions','formUser'));
        }
        return view('frontEnd.onlineForm.new_form', compact('formType'));
    }

    public function startEntry(Request $request, $slug){
        $formType = $this->form->findFormTypeBySlug($slug);
        if(!$formType){
            return redirect('/');
        }
        setFormSession($formType, $request->full_name, $request->email, $request->phone);
        return redirect()->route('front.form.start',[$formType->slug]);
    }

    public function resetEntry(){
        destroyFormSession();
        return redirect()->route('front.form.selection');
    }

    public function ajaxFormLoad(Request $request){
        try{
            $form = $this->form->findById($request->form_id);
            $formUser = $this->form->findFormUserById($request->form_user_id);
            $blade = $form->bladeLayout();
            $view = view('frontEnd.onlineForm.commonForm.'.$blade,compact('form','formUser'))->render();
            return response()->json($view,200);
        }catch (\Exception $e){
            return response()->json($e->getMessage(),400);
        }
    }


    public function postNewAccount(Request $request){
        try {
            $form = $this->form->findById($request->form_id);
            if (!$form) {
                Toastr::error('Invalid Form. Please try again Later', 'Something went wrong');
                return redirect()->back();
            }
            $data = $request->all();
            $exclude_direct = ['form_id','form_user_id', '_token', 'image_passport', 'specimen_signature_image_1',
                'specimen_signature_image_2', 'specimen_signature_image_3', 'specimen_signature_image_4',
                'introducer_signature', 'nominee_image', 'nominee_signature'
            ];

            //clean data
            $direct_data = $this->exclude_direct($data, $exclude_direct);
            $images = $this->get_images_only($request, $exclude_direct);


            //crete new object of class FormSubmission
            $submission = FormSubmission::create([
                'form_id' => $form->id,
                'form_user_id' => $request->form_user_id,
                'type' => 'Submit'
            ]);

            //Store form meta
            $this->form->storeMeta($submission, $direct_data);
            $this->form->storeMetaImages($submission, $images);

            /* For Storing meta with array values like checkbox multiple */
            //$this->form->storeMultiMeta();

            Toastr::success('Form Submitted','Operation Success');
            return redirect()->back();

        }catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'Failed to submit');
            return redirect()->back();
        }

    }

    private function exclude_direct($data, $exclude_direct){
        foreach ($exclude_direct as $exclude){
            if(isset($exclude)){
                unset($data[$exclude]);
            }
        }
        return $data;
    }

    private function get_images_only($request, $image_keys){
        $images = [];
        foreach ($image_keys as $key){
            if($request->hasFile($key)){
                $images = array_merge($images, [$key => $request->file($key)]);
            }
        }
        return $images;
    }

    public function postKyc(Request $request){
        try {
            $form = $this->form->findById($request->form_id);
            if (!$form) {
                Toastr::error('Invalid Form. Please try again Later', 'Something went wrong');
                return redirect()->back();
            }
            $data = $request->all();
            $exclude_direct = ['form_id','form_user_id', '_token', 'left_fingerprint', 'right_fingerprint',
                'signature_photo', 'other_photo', 'voter_id_photo', 'citizenship_photo'
            ];

            //clean data
            $direct_data = $this->exclude_direct($data, $exclude_direct);
            $images = $this->get_images_only($request, $exclude_direct);


            //crete new object of class FormSubmission
            $submission = FormSubmission::create([
                'form_id' => $form->id,
                'form_user_id' => $request->form_user_id,
                'type' => 'Submit'
            ]);

            //Store form meta
            $this->form->storeMeta($submission, $direct_data);
            $this->form->storeMetaImages($submission, $images);

            Toastr::success('Form Submitted','Operation Success');
            return redirect()->back();
        }catch (\Exception $e){
            Toastr::error($e->getMessage(),'Failed to submit');
            return redirect()->back();
        }

    }

    public function postShare(Request $request){
        try{
            $form = $this->form->findById($request->form_id);
            if(!$form){
                Toastr::error('Invalid Form. Please try again Later','Something went wrong');
                return redirect()->back();
            }
            $data = $request->all();
            $exclude_direct = ['form_id','form_user_id','_token','image_passport',
                'applicant_signature'
            ];

            //clean data
            $direct_data = $this->exclude_direct($data, $exclude_direct);
            $images = $this->get_images_only($request,$exclude_direct);


            //crete new object of class FormSubmission
            $submission = FormSubmission::create([
                'form_id' => $form->id,
                'form_user_id' => $request->form_user_id,
                'type' => 'Submit'
            ]);

            //Store form meta
            $this->form->storeMeta($submission, $direct_data);
            $this->form->storeMetaImages($submission, $images);

            Toastr::success('Form Submitted','Operation Success');
            return redirect()->back();
        }catch (\Exception $e){
            Toastr::error($e->getMessage(),'Failed to submit');
            return redirect()->back();
        }

    }


//    public function newAccount(){
//        $form = $this->form->findByLayout(Form::LAYOUT_NEW_ACCOUNT);
//        return view('frontEnd.onlineForm.newAccount', compact('form'));
//    }
//
//    public function kyc(){
//        $form = $this->form->findByLayout(Form::LAYOUT_KYC);
//        return view('frontEnd.onlineForm.kyc', compact('form'));
//    }
//
//    public function share(){
//        $form = $this->form->findByLayout(Form::LAYOUT_SHARE);
//        return view('frontEnd.onlineForm.share', compact('form'));
//    }
//
//    public function kym(){
//        $form = $this->form->findByLayout(Form::LAYOUT_KYM);
//        return view('frontEnd.onlineForm.kym', compact('form'));
//    }
//
//    public function newMember(){
//        $form = $this->form->findByLayout(Form::LAYOUT_NEW_MEMBER);
//        return view('frontEnd.onlineForm.newMember', compact('form'));
//    }
//
//
//    public function newAccountCompany(){
//        $form = $this->form->findByLayout(Form::LAYOUT_NEW_ACCOUNT_COMPANY);
//        return view('frontEnd.onlineForm.newAccountCompany', compact('form'));
//    }
}
