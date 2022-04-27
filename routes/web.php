<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController;
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

Route::get('/', [MainController::class, 'pageView'])->name('index');

Route::get('/posts/category/{category}', [PostController::class, 'allPosts'])->name('posts');
Route::get('/posts/category/{category}/{subcategory}', [PostController::class, 'categoryPosts'])->name('posts.subcategory');

Route::get('/post/{post}', [PostController::class, 'singlePost'])->name('post');

Route::get('/subscribe/{category}', [SubscribeController::class, 'pageView'])->name('subscribe');


// Profile
Route::get('/profile/wishlist', [ProfileController::class, 'pageWishlist'])->name('wishlist');