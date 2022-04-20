<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/posts', [PostController::class, 'allPosts'])->name('posts');

Route::get('/post/{post}', [PostController::class, 'singlePost'])->name('post');



Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe');