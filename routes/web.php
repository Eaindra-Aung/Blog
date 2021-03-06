<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;


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




//BlogController
Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

// CommentController
Route::post('/blogs/{blog:slug}/comments', [CommentController::class, 'store']);

// AuthController
Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'post_login'])->middleware('guest');

Route::post('/blogs/{blog:slug}/subscription', [BlogController::class, 'subscriptionHandler']);


