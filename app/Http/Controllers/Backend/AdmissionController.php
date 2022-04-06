<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admission;

class AdmissionController extends Controller
{

    public function index(){
        $admissions = Admission::all();
        return view('admin.admission.index',compact('admissions'));
    }


    public function show($id)
    {
        $admission = Admission::find($id);
        return view('admin.admission.view', compact('admission'));
    }

    public function delete($id)
    {
        $contact = Admission::where('id', $id)->first();
        $contact->delete();
        if($contact){
            return redirect()->back()->with('success', 'Admission Successfully Deleted.');
        }else{
            return redirect()->back()->with('errors', 'Admission Not Found!!! Refresh your page.');
        }
    }
}
