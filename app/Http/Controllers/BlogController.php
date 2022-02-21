<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;


class BlogController extends Controller
{
    //
    public function index() { 
        return view('blogs.index',[
            'blogs'=>Blog::latest()->filter(request(['search', 'category', 'username']))->paginate(6)->withQueryString(),
                               
        ]);
    }
     //    ->//simplePaginate(6)
    //lazyloading eagerload
            
        public function show(Blog $blog) {
            return view('blogs.show',[
                "blog" => $blog,
                "ramdomBlogs" => Blog::inRandomOrder()->take(3)->get()
            ]); 
        }
        public function subscriptionHandler(Blog $blog){
            //if Blog subscribe
            if(User::find(auth()->user())->isSubscribed($blog)){
                $blog->unSubscribe();
            }else {
                $blog->subscribe();
            }

        }
    }

