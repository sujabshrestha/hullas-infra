<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Activitylog\Models\Activity;

class MailSenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senders = MailSender::all();
        return view('admin.mail.sender.sender', compact('senders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'designation' => 'required',
            'signature' => 'required',

        ]);

        try{
           $mailSneder= new MailSender();
           $mailSneder->name = $request->name;
           $mailSneder->designation = $request->designation;
            $mailSneder->image = $this->uploadFile( $request->image, 'upload/mailsender/');

            $mailSneder->signature = $this->uploadFile( $request->signature, 'upload/mailsender/');
            $mailSneder->save();

            return redirect()->back()->with('success', 'Mail Sender Successfully Created.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Creating Mail Sender');
        }

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
        $sender = MailSender::find($id);
        if($sender){
            $sender->delete();
            return redirect()->back()->with('success', 'Mail Sender Moved to Trash.');
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
        $senders = MailSender::onlyTrashed()->get();
        return view('admin.mail.sender.trash', compact('senders'));
    }


    public function getRestore($id){

        try{
            $sender = MailSender::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('success', 'Successfully Restore.');
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Error while Restoring.');
        }


    }


    public function forceDelete($id)
    {

        try{
            $sender = MailSender::withTrashed()->where('id', $id)->first();
            if($sender){
               if ($sender->signature){
                   File::delete(public_path($sender->signature));
               }
                $sender->forceDelete();
                return redirect()->back()->with('success', 'Mail Sender Successfully Deleted.');
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


        return view('admin.mail.sender.log', compact( 'activityLogs'));
    }
}
