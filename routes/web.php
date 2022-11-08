<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;

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



Route::get('/',[PostController::class,'index'])->name('index');
Route::get('/post/{id}',[PostController::class,'details'])->name('post.details');
Route::get('/create',[PostController::class,'create'])->name('post.create');
Route::post('/store',[PostController::class,'store'])->name('post.store');
//Comment Controller
Route::post('/post/{id}/comment',[CommentController::class,'store'])->name('comment.store');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'customregister'])->name('register-user');
Route::get('/login',[RegisterController::class,'login'])->name('login');
Route::post('/login',[RegisterController::class,'customlogin'])->name('login-user');

