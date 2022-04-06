<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        // $user = User::create([
        //     'firstname' => $request->first_name,
        //     'lastname' => $request->last_name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);
        Sentinel::registerAndActivate($request->all());
        redirect('/register');
    }


    public function createadmin(){
        User::create([

        ]);
    }
}
