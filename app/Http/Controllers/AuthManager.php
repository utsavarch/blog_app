<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect()->intended(route('home'));

        }
        return view('login');
    }

    function registration(){
        if(Auth::check()){
            return redirect()->intended(route('home'));

        }
        return view ('registration');
    }

    function loginpost(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('welcome'));
        }
        return redirect()->intended(route('login'))->with("error","Login Details are Invalid");
    }

    function registrationpost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if(!$user){
            return redirect()->intended(route('registration'))->with("error","Registration Failed");
        }
        return redirect()->intended(route('login'))->with("Success","Registration Success");
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    function create(Request $request){
        return redirect()->intended(route('create'));
    }
}
