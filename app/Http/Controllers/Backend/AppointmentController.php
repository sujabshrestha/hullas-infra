<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Appointments;
use Brian2694\Toastr\Facades\Toastr;

class AppointmentController extends Controller
{


    public function index()
    {
        try{
            $inquiries = Appointments::latest()->get();
            return view('admin.inquiry.index',compact('inquiries'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try{
            $inquiry = Appointments::where('id', $id)->first();
            if($inquiry){
                $inquiry->delete();
                return redirect()->back()->with('success', 'Successfully Deleted');
            }
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


}
