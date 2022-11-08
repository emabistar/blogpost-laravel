<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    //Login
     public function login(){
        return view('auth.login');
     }






    public function register(){

        return view('auth.register');
    }
    public function customregister(Request $request){
         // validate request
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // get all requests
        $data = $request->all();
        $user =User::createUser( $data);
        return redirect("index")->withSuccess('You have signed-in');;
    }

}
