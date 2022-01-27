<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;


class BlogController extends Controller
{
    //
    public function index() { 
        return view('blogs.index',[
            'blogs'=>Blog::latest()->filter(request(['search', 'category', 'username']))
                                   ->paginate(6) //simplePaginate(6)
                                ->withQueryString(),//lazyloading eagerload
            // 'categories'=>Category::all()
        ]);
    }
        public function show(Blog $blog) {
            // $blog = Blog::find($slug);
            return view('blogs.show',[
                "blog" => $blog,
                "ramdomBlogs" => Blog::inRandomOrder()->take(3)->get()
            ]); 
        }
    }

