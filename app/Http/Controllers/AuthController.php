<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Unique;







class AuthController extends Controller
{
    //
    public function create(){
        // dd('hit');
        return view('register.create');
    }
    public function store(){
        
        $formData=request()->validate([
            'name'=> 'required|max:255|min:3',
            'email'=> ['required', 'email'], //required|email
            'username'=> ['required', 'max:255', 'min:3', Rule::unique('users', 'username')] ,
            'password'=> ['required', 'min:8'],
        ]);
        // dd('success');
        User::create($formData);
        return redirect('/');
    }
}
