<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberMail;


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

    $subscribers=$blog->subscribers->filter(fn ($subscriber)=> 
    $subscriber->id != auth()->id());
    // foreach ($subscribers as $subscriber)
    // {

    // }
    $subscribers->each(function ($subscriber) use ($blog){
         Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
    });
     return redirect('/blogs/'.$blog->slug);
}
}
