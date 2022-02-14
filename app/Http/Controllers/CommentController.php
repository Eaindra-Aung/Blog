<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Blog $blog){
       
        request()->validate([
            'body'=>'required | min:10',
        ]);
 
    //comment -> store
    $blog->comments()->create([
         'body'=> request('body'),
         'user_id' => auth()->user()->id


    ]);
    return back();
}
}