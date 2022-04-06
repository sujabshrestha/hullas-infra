<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Callback;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function index(){
        $callbacks = Callback::orderBy('id', 'DESC')->get();
        return view('admin.callback.index',compact('callbacks'));
    }

    public function show($id)
    {
        $callback = Callback::find($id);
        return view('admin.callback.view', compact('callback'));
    }

    public function delete($id)
    {
        $callback = Callback::where('id', $id)->first();
        $callback->delete();
        if($callback){
            return redirect()->back()->with('success', 'Admission Successfully Deleted.');
        }else{
            return redirect()->back()->with('errors', 'Admission Not Found!!! Refresh your page.');
        }
    }
}
