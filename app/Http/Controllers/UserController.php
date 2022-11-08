<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
// use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{

    // Show Register Page
    public function create(){
        return view('register');

    }
   public function store(Request $request){
        $formFields=$request->validate([
            'name'=>'required|min:3',
            'email'=>'required|unique:users|min:4',
            'role'=>'required',
            'password'=>'required|confirmed|min:4'
        ]);

        // hash Password
        $formFields['password']=bcrypt($formFields['password']);

        // Create User
        $user=User::create($formFields);

        // Login
        auth()->Login($user);

       return redirect('listings')->with('message','user logged in successfully');

    }
    //
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('listings')->with('message','You logged out');
    }
    public function login(){

        return view('login');
    }
    public function authenticate(Request $request){
        $formFields=$request->validate([
            'email'=>['required','email'],
            'password'=>'required'

        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            
            return redirect('listings')->with('message','You are Logged in');
            
        }

        return back()->withErrors(['email'=>'invalid credentials' ])->onlyInput('email');


    }
}
