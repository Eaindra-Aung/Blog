<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;



class AuthController extends Controller
{
    //CREATE
    public function create(){
        // dd('hit');
        return view('auth.register');
    }
    
    //STORE
    public function store(){
        
        //validation
        $formData=request()->validate([
            'name'=> ['required', 'max:255', 'min:3'], //'required|max:255|min:3',
            'email'=> ['required', 'email',  Rule::unique('users', 'email')], 
            'username'=> ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'password'=> ['required', 'min:8'],
        ]);
         //login
        $user=User::create($formData);
        auth()->login($user);
        // session()->flash('success','Welcome '.$user->name);
        return redirect('/')->with('success','Welcome '.$user->name);
       
    }
    //LOGIN
    public function login(){
        // dd('hit');
        return view('auth.login');
    }

    //POST METHOD LOG IN
    public function post_login(){
        
        // validation
        $formData=request()->validate([
            'email' => ['required', 'email', 'max:255', 'min:3', Rule::exists('users', 'email')],
            'password' => ['required', 'max:255', 'min:8'],
        ],[
        'email.required'=>'We need your email address',
        'password.min'=> 'Password should be at least 8 characters'
         ] );
         // auth attempt
         dd($formData);
         if(auth()->attempt($formData)){
             return redirect('/')->with('success', 'Welcome back '.$user->name);
         }else{
             return rediect('/')->back()->withError([
                 'email'=> 'User Input Wrong!'
             ]);
         };
        
        // if user credentials correct => redirect home 
        // if user credentisal false => redirect back to form with error

    }
    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }
}
