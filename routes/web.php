<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\BlogController;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/contact', function () { //path 
//     return view('contact'); //page=>page.index bladename
// });



Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);


Route::get('/users/{user:username}', function (User $user) {
    return view('blogs',[
        "blogs" => $user->blogs,
    ]); 
});






