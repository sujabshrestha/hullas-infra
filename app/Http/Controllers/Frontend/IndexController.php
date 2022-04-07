<?php

namespace App\Http\Controllers\Frontend;

use App\AppliedCareer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Jobs\ContactJob;
use App\Mail\CareerAppliedMail;
use App\Mail\CareerAppliedMailForCompany;
use App\Mail\ContactMail;
use App\Mail\ContactMailForCompany;
use App\Model\Admission;
use App\Model\Album;
use App\Model\Callback;
use App\Model\Contact;
use App\Model\CustomField;
use App\Repositories\FrontCms\CmsInterface;
use App\Repositories\FrontCms\CmsRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Model\GobalPost;
use App\Model\GobalPostMeta;
use Illuminate\Database\Eloquent\Collection;
use App\Model\PostType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    protected $cms;
    public function __construct(CmsInterface $cms)
    {
        $this->cms = $cms;
    }

    public function home()
    {;

        $blogs = $this->cms->getGlobalPostByID(2);
        $whoweare = $this->cms->getGlobalPostByID(7, 1);
        $productCategories = $this->cms->getGlobalPostByID(8);
        $products = $this->cms->getGlobalPostByID(1, 6);
        foreach ($products as $product) {
            $category_meta = $this->cms->getGlobalPostMetaByKey($product, 'select-product-category');
            if ($category_meta) {
                $product->parent_category =  implode(" ", unserialize($category_meta));
            }
        }

        $offers = $this->cms->getGlobalPostByID(9, 3);
        foreach ($offers as $offer) {
            $offer->icon = $this->cms->getGlobalPostMetaByKey($offer, 'icon');
        }
        $testimonials = $this->cms->getGlobalPostByID(2, 9);
        $teams = $this->cms->getGlobalPostByID(4, 8);
        // foreach ($teams as $team) {
        //     $team->degination = $this->cms->getGlobalPostMetaByKey($team, 'degination');
        // }
        $ourservices = $this->cms->getGlobalPostByID(7, 6);
        foreach ($ourservices as $ourservice) {
            $ourservice->icon = $this->cms->getGlobalPostMetaByKey($ourservice, 'icon');
        }

        $blogPosttype = PostType::where('slug', 'blog')->first();

        $whychooseus = $this->cms->getGlobalPostByID(8, 1);

        foreach ($whychooseus as $chooseus) {
            $chooseus_meta = $this->cms->getGlobalPostMetaByKey($chooseus, 'why-choose-us-list');
            if ($chooseus_meta) {
                $chooseus->chooseusmetas = unserialize($chooseus_meta);

            }
        }

        $sliders =  $this->cms->getGlobalPostByID(6);

        $categories =  $this->cms->getGlobalPostByID(9);

        $allnews =  $this->cms->getGlobalPostByID(1);



        return view(
            'frontEnd.pages.home',
            compact(
                'sliders',
                'blogs',
                'testimonials',
                'teams',
                'ourservices',
                'sliders',
                'blogPosttype',
                'whoweare',
                'whychooseus',
                'categories',
                'allnews'
            )
        );
    }

    public function whoweare(){
        $whoweares = $this->cms->getGlobalPostByID(7, 1);
        return view('frontEnd.pages.single.whoweare',compact('whoweares'));
    }

    public function about()
    {
        return view('frontEnd.pages.single.aboutus');
    }

    public function units($slug)
    {

        $postType = $this->cms->getGlobalPostTypeBySlug($slug);
        $posts = $this->cms->getGlobalPostByPostType($postType);
        return view('frontEnd.pages.unit', compact('postType', 'posts'));
    }

    public function ourteam()
    {
        $posttype = PostType::where('slug', 'our-team')->first();
        $ourteams = GobalPost::where('post_type', $posttype->id)->get();
        return view('frontEnd.pages.ourteam', compact('ourteams'));
    }


    public function unitSingle($post_type, $slug)
    {
        $postType = $this->cms->getGlobalPostTypeBySlug($post_type);
        $posts = $this->cms->getGlobalPostByID($postType->id, 10);
        $unit = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.unitsingle', compact('unit', 'posts', 'postType'));
    }

    public function product($id)
    {
        $productCategories = $this->cms->getGlobalPostByID(9);
        $products = $this->cms->getGlobalPostByID(10);

        $pebs =  new Collection();
        $structuralpipes = new Collection();
        $hrgalvanizings = new Collection();

        foreach ($products as $key => $product) {
            $category_meta = $this->cms->getGlobalPostMetaByKey($product, 'category');
            $product->price = $this->cms->getGlobalPostMetaByKey($product, 'price');
            if ($category_meta) {
                $product->parent_category =  implode(" ", unserialize($category_meta));
                if ($product->parent_category == 25 && $product->parent_category == $id){
                    $pebs->push($product);

                }
                if ($product->parent_category == 26 && $product->parent_category == $id){
                    $structuralpipes->push($product);

                }
                if ($product->parent_category == 27 && $product->parent_category == $id){
                    $hrgalvanizings->push($product);

                }


            }
        }

        return view('frontEnd.pages.product',
        compact('products', 'productCategories', 'pebs' , 'structuralpipes', 'hrgalvanizings'));
    }

    public function allproducts(){

        $productCategories = $this->cms->getGlobalPostByID(9);
        $products = $this->cms->getGlobalPostByID(10, 6);
        // foreach ($products as $product) {
        //     $category_meta = $this->cms->getGlobalPostMetaByKey($product, 'select-product-category');
        //     if ($category_meta) {
        //         $product->parent_category =  implode(" ", unserialize($category_meta));
        //     }
        // }

        return view('frontEnd.pages.allproducts',
        compact('products','productCategories'));
    }


    public function productSingle($slug)
    {
        $productSingle = $this->cms->getgobalPostBySlug($slug);



        foreach($productSingle->postMetas as $product_meta){
            $productSingle->parent_category =  implode(" ", unserialize($product_meta->value));

        }

        $posts = $this->cms->getGlobalPostByID(2, 5);

        // foreach ($products as $key => $product) {
        //     $category_meta = $this->cms->getGlobalPostMetaByKey($product, 'category');
        //     $product->price = $this->cms->getGlobalPostMetaByKey($product, 'price');
        //     if ($category_meta) {
        //         $product->parent_category =  implode(" ", unserialize($category_meta));
        //         if ($product->parent_category == 25 && $product->parent_category == $productSingle->parent_category){
        //             $posts->push($product);

        //         }
        //         if ($product->parent_category == 26 && $product->parent_category == $productSingle->parent_category){
        //             $posts->push($product);

        //         }
        //         if ($product->parent_category == 27 && $product->parent_category == $productSingle->parent_category){
        //             $posts->push($product);

        //         }


        //     }
        // }

        return view('frontEnd.pages.productSingle', compact('productSingle', 'posts'));
    }


    public function career()
    {
        $posts = $this->cms->getGlobalPostByID(8, 3);
        return view('frontEnd.pages.career', compact('posts'));
    }

    public function careerSingle($slug){
        $career = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(8, 5);
        return view('frontEnd.pages.single.careerSingle', compact('career', 'posts'));

    }


    public function applyNow(Request $request){
        $appliedcareer = new AppliedCareer();
        $appliedcareer->name =  $request->name;
        $appliedcareer->email =  $request->email;
        $appliedcareer->phone =  $request->phone;
        $appliedcareer->cv =  fileupload('upload/cirriculumvitae/', $request->cv) ?? "";
        $appliedcareer->save();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv' =>  $appliedcareer->cv
        ];

        $mail = new CareerAppliedMail($details);
        Mail::to($request->email)->send($mail);

        $mail = new CareerAppliedMailForCompany($details);
        Mail::to($request->email)->send($mail);

        return response()->json([
            'success' => 'Successfully Submitted'
        ]);

    }

    public function blog()
    {
        $posts = $this->cms->getGlobalPostwithPaginateByID(6, 6);
        return view('frontEnd.pages.blog', compact('posts'));
    }

    public function allphilosophy()
    {
        $ourphilosophies = $this->cms->getGlobalPostByID(6);
        return view('frontEnd.pages.allphilosophy', compact('ourphilosophies'));
    }

    public function blogSingle($slug)
    {
        $blog = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(2, 5);
        return view('frontEnd.pages.single.blogSingle', compact('blog', 'posts'));
    }

    public function newsSingle($slug)
    {
        $news = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(1, 5);
        return view('frontEnd.pages.single.newsSingle', compact('news', 'posts'));
    }

    public function whitepaperSingle($slug)
    {
        $whitepapers = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(3, 5);
        return view('frontEnd.pages.single.whitepapersSingle', compact('whitepapers', 'posts'));
    }


    public function casestudySingle($slug)
    {
        $casestudy = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(4, 5);
        return view('frontEnd.pages.single.casestudySingle', compact('casestudy', 'posts'));
    }


    public function singlepost($id)
    {
        $post = GobalPost::where('id', $id)->first();
        $posttype = PostType::where('id', $post->post_type)->first();
        return view('frontEnd.pages.singlePost', compact('post'));
    }


    public function testomonialpage()
    {
        $testimonials = $this->cms->getGlobalPostByID(2, 10);

        // $testomonialmeta = GobalPostMeta::where('id',$testomonial->id)->pluck('value','key')->get();

        // $designation = CustomField::where('post_type',$posttype->id)->first();
        return view('frontEnd.pages.testomonial', compact('testimonials'));
    }

        public function albums()
    {
        $albums = Album::all();
        return view('frontEnd.pages.albums', compact('albums'));
    }

    public function gallery($id)
    {
        $gallery = Album::findOrFail($id);
        return view('frontEnd.pages.gallery', compact('gallery'));
    }

    public function teamMember($id)
    {

        $category = $this->cms->getGlobalPostSingleById($id);
        $member_meta = $this->cms->getGlobalPostMetaByKey($category, 'members');
        $member_ids = unserialize($member_meta);
        if ($member_ids) {
            $members = $this->cms->getGlobalPostMultipleByIds($member_ids);
            foreach ($members as $member) {
                $member->designation = $this->cms->getGlobalPostMetaByKey($member, 'designation');
            }
            $category->members = $members;
        }

        return view('frontEnd.pages.memberPopup', compact('category'));
    }


    public function postModal($id)
    {
        $post = $this->cms->getGlobalPostSingleById($id);
        return view('frontEnd.pages.postPopup', compact('post'));
    }

    public  function contact()
    {
        return view('frontEnd.pages.single.contactus');
    }

    // public function submitContact(StoreContactRequest $request){
    public function submitContact(Request $request)
    {
        $contact = Contact::create($request->only(['name', 'email', 'phone','address', 'message']));

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message
        ];

        // $contactjob = new ContactJob($details);
        // dispatch($contactjob->delay(Carbon::now()->addSeconds(3)));

        $mail = new ContactMail($details);
        Mail::to($request->email)->send($mail);

        $contactCompanyMail = new ContactMailForCompany($details);
        Mail::to('info@an4soft.com')->send($contactCompanyMail);


        Toastr::success('Successfully submitted');
        return redirect()->back();

    }


    public  function loan()
    {
        return view('frontEnd.pages.loan');
    }

    public function emi()
    {
        return view('frontEnd.pages.emi_page');
    }


    public function allblogs()
    {
        $blogs = $this->cms->getGlobalPostByID(2);

        return view('frontEnd.pages.single.allblogs', compact('blogs'));
    }

    public function allnews()
    {
        $allnews = $this->cms->getGlobalPostByID(1);


        return view('frontEnd.pages.single.allnews', compact('allnews'));
    }

    public function allwhitepapers()
    {
        $allwhitepapers = $this->cms->getGlobalPostByID(3);

        return view('frontEnd.pages.single.allwhitepapers', compact('allwhitepapers'));
    }


    public function allcasestudies()
    {
        $allcasestudies = $this->cms->getGlobalPostByID(4);

        return view('frontEnd.pages.single.allcasestudies', compact('allcasestudies'));
    }

    public function termsOfService(){
        return view('frontEnd.pages.termsOfService');
    }

    public function privacyPolicy(){
        return view('frontEnd.pages.privacyPolicy');
    }


    public function offerandseminar()
    {
        $posts = $this->cms->getGlobalPostByID(11);
        return view('frontEnd.pages.offerseminar', compact('posts'));
    }

    public function seminarsingle($slug)
    {
        $seminar = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(1)->where('slug', '!=', $slug);
        return view('frontEnd.pages.seminarsingle', compact('seminar', 'posts'));
    }
    public function allservices()
    {
        $ourservices = $this->cms->getGlobalPostByID(7, 6);
        foreach ($ourservices as $ourservice) {
            $ourservice->icon = $this->cms->getGlobalPostMetaByKey($ourservice, 'icon');
        }
        return view('frontEnd.pages.single.services', compact('ourservices'));
    }

    public function appointment(){
        return view('frontEnd.pages.single.appointment');
    }

    public function servicessingle($slug)
    {
        $service = $this->cms->getgobalPostBySlug($slug);

        $otherservices = $this->cms->getGlobalPostByID(7)->where('slug', '!=', $slug);
        return view('frontEnd.pages.single.servicesSingle', compact('service','otherservices'));
    }

    public function philosophySingle($slug)
    {
        $philosophy = $this->cms->getgobalPostBySlug($slug);
        $ourphilosophies = $this->cms->getGlobalPostByID(6)->where('slug', '!=', $slug);
        return view('frontEnd.pages.philosophySingle', compact('philosophy', 'ourphilosophies'));
    }

    public function studysingle($slug)
    {
        $study = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.studysingle', compact('study'));
    }

    public function testpreparationsingle($slug)
    {
        $preparation = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.preparationsingle', compact('preparation'));
    }


    public function admission()
    {
        $courses = $this->cms->getGlobalPostByID(8);
        return view('frontEnd.pages.admission', compact('courses'));
    }

    public function admissionsubmit(Request $request)
    {
        $admission = Admission::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'phone' => $request->Contact,
            'email' => $request->Email,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'know_about_rise' => $request->know_about_rise,
            'education' => $request->education ?? "",
            'image' => fileupload('upload/admissions/', $request->image) ?? "",
            'address' => $request->address,
            'time' => $request->time,
            'course' => $request->course,
            'message' => $request->message
        ]);
        if ($admission) {
            return redirect()->back()->with('success', 'Added Successfully!!');
        }
        return redirect()->back()->with('error', 'Failure !!!');
    }


    public function callbacksubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'service' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $callback = Callback::create([
            'name' => $request->name,
            'service' => $request->service,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        if ($callback) {
            return redirect()->back()->with('success', 'Submitted Successfully!!!');
        } else {
            return redirect()->back()->with('error', 'Submittion Failure!!!');
        }
    }
}
