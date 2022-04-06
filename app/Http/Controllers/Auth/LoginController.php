<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailJob;
use App\Mail\ForgetPasswordMail;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function adminLogin(){

        // if(Sentinel::guest() == false){
        //     return redirect()->route('admin.dashboard');
        // }
        return view('auth.adminlogin');
    }

    public function adminLoginPost(Request $request){

        $request->validate([
            'email'    => 'required|email',
            'password' => 'min:8|required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = Auth::user();
            $userroles = $user->getRoleNames();
            if($userroles->contains('admin')){
                Toastr::success('Successfully Logged In');
                return redirect()->route('admin.dashboard');
            }
        }
        else{
            Toastr::error('Something went wrong');
            return redirect()->route('admin.login');
        }


    }

    public function postLogin(Request $request){

        Sentinel::authenticate($request->all());
        return Sentinel::check();
    }

    public function logout(){
        Auth::logout();

        Toastr::success('Successfully Logged out');
        return redirect('/');
    }


    public function activate($userId, $code) {

        $user = Sentinel::findById($userId);

        if (Activation::complete($user, $code)) {

            // Activation was successfull
            Session::flash('success', __('auth.activate_successful'));

            return redirect()->route('admin.login');

        } else {

            Activation::removeExpired();
            // Activation not found or not completed.
            Session::flash('failed', __('auth.activate_unsuccessful'));

            return redirect()->route('admin.login');
        }
    }

    public function adminForgetPassword(){
        return view('auth.forgetpassword');

    }

    public function adminForgetPasswordPost(Request $request){

        $user=User::whereEmail($request->email)->first();
        if ($user == null){
            Session::flash('failed', __('Email Not Found!!'));
            return redirect()->back();
        }
        if ($checkreminder = Reminder::exists($user)){
            $checkreminder->delete();
        }
        $reminder = Reminder:: create($user);
        $data=['email'=>$request->email, 'code'=>$reminder->code];

        dispatch(new SendMailJob($data))->delay(Carbon::now()->addSeconds(5));
//        Mail::to($request->email)->send(new ForgetPasswordMail($data));
        Session::flash('success', __('Reset Code sent to your email'));
        return redirect()->back();
    }

    public function resetPassword($email, $code){
        $user=User::whereEmail($email)->first();
        if($user){
            if($reminder=Reminder::where('user_id', $user->id)->first()){
                if($code==$reminder->code){
                    return view('auth.resetpassword', compact('user', 'code'));
                }
                else{
                    Session::flash('failed', __('Something went wrong please try Again!!!'));
                    return redirect()->route('admin.forgetpassword');
                }
            }
            else{
                Session::flash('failed', __('Something went wrong please try Again!!!'));
                return redirect()->route('admin.forgetpassword');
            }
        }else{
            Session::flash('failed', __('User Not Found!!'));
            return redirect()->route('admin.forgetpassword');
        }

    }

    public function resetPasswordPost(Request $request){

        if($request->password){
            if ($request->password == $request->confirm_password){
                $user=User::where('id', $request->user_id)->first();
                if($reminder=Reminder::where('user_id', $user->id)->first()){
                    if($request->code == $reminder->code){
                        Reminder::complete($user, $request->code, $request->password);
                        Session::flash('success', __('Your password has been reset.'));
                        return redirect()->route('admin.login');
                    }
                    else{
                        Session::flash('failed', __('Something went wrong please try Again!!!'));
                        return redirect()->route('admin.forgetpassword');
                    }
                }
                else{
                    Session::flash('failed', __('Something went wrong please try Again!!!'));
                    return redirect()->route('admin.forgetpassword');
                }
            }
        }else{
            Session::flash('failed', __('Password Field is Empty!!'));
            return redirect()->back();
        }
    }
}
