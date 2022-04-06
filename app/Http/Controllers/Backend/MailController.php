<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\CompanyMailJob;
use App\Mail\CompanyMail;
use App\Model\MailSender;
use App\Model\SendMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
use Spatie\Activitylog\Models\Activity;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails = SendMail::all();
        return view('admin.mail.index', compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $senders = MailSender::all();
        return view('admin.mail.sendmail', compact('senders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'salutation' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'organization' => 'required',
            'subject' => 'required',
            'address' => 'required',
            'mail_sender' => 'required',
            'mail_to' => 'required',
            'body' => 'required',

        ]);

        try{
            $mail= new SendMail();
            $mail->salutation = $request->salutation;
            $mail->name = $request->name;
            $mail->designation = $request->designation;
            $mail->organization = $request->organization;
            $mail->organization = $request->organization;
            $mail->subject = $request->subject;
            $mail->address = $request->address;
            $mail->mail_sender_id = $request->mail_sender;
            $mail->mail_to = $request->mail_to;
            $mail->body = $request->body;
            $mail->save();

            return redirect()->back()->with('success', 'Mail Sender Successfully Created.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Creating Mail Sender');
        }

    }


    public function mailPrint(Request $request){

        $mail = SendMail::find(2);
        // share data to view
        view()->share('mail',$mail);
        $pdf = PDF::loadView('admin.mail.print', $mail);


        // download PDF file with download method
        $pdffile =  $pdf->save('pdf_file.pdf');
        $data=['email'=>'aalok@mail.com'];
        dispatch(new CompanyMailJob($data))->delay(Carbon::now()->addSeconds(5));


      return view('admin.mail.print', compact('mail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sender = MailSender::find($id);
        return view('admin.mail.sender.edit', compact('sender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',

        ]);

        try{
            $mailSneder= MailSender::where('id', $request->sender_id)->first();
            $mailSneder->name = $request->name;
            $mailSneder->designation = $request->designation;
            if ($request->image){
                if ($mailSneder->image){
                    File::delete(public_path($mailSneder->image));
                }
                $mailSneder->image = $this->uploadFile( $request->image, 'upload/mailsender/');
            }
            if ($request->signature){
                if ($mailSneder->signature){
                    File::delete(public_path($mailSneder->signature));
                }
                $mailSneder->signature = $this->uploadFile( $request->signature, 'upload/mailsender/');
            }
            $mailSneder->update();

            return redirect()->back()->with('success', 'Mail Sender Successfully Updated.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Updating Mail Sender');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mail = SendMail::find($id);
        if($mail){
            $mail->delete();
            return redirect()->back()->with('success', 'Mail Moved to Trash.');
        }else{
            return redirect()->back()->with('errors', 'Post Not Found!!! Refresh your page.');
        }
    }


    public function uploadFile($file, $path){
        if ($file) {

            $uploadedfile =  time() . '.' . $file->getClientOriginalName();
            $destinationPath = public_path($path);
            $file->move($destinationPath, $uploadedfile);
            return $path.$uploadedfile;

        }
        return null;
    }



    public function getTrash(){
        $mails = SendMail::onlyTrashed()->get();
        return view('admin.mail.trash', compact('mails'));
    }


    public function getRestore($id){

        try{
            $mail = SendMail::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('success', 'Successfully Restore.');
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Error while Restoring.');
        }


    }


    public function forceDelete($id)
    {
        try{
            $mail = SendMail::withTrashed()->where('id', $id)->first();
            if($mail){
                $mail->forceDelete();
                return redirect()->back()->with('success', 'Mail Successfully Deleted.');
            }else{
                return redirect()->back()->with('errors', 'Post Not Found!!! Refresh your page.');
            }
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Error while Deleting.');
        }

    }

    public function log()
    {
        $activityLogs = Activity::where('subject_type', MailSender::class)->get();


        return view('admin.mail.log', compact( 'activityLogs'));
    }
}
