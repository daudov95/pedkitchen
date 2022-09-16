<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/post/category/{category}/{subcategory}/{post}', [PostController::class, 'singlePost'])->name('post'); //{subcategory}
Route::get('/post/{post}', [PostController::class, 'singlePostFree'])->name('post.free');

Route::get('/subscribe/{category}', [SubscribeController::class, 'pageView'])->name('subscribe');
Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe.post');


// Profile

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => 'auth'], function () {
    Route::get('/', [ProfileController::class, 'pageProfile'])->name('main');
    Route::get('settings', [ProfileController::class, 'pageSettings'])->name('settings');
    Route::get('favorites', [ProfileController::class, 'pageFavorites'])->name('favorites');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/', [AdminMainController::class, 'mainPage'])->name('main');
    Route::get('/categories', [AdminMainController::class, 'categoryPage'])->name('categories');
    
    Route::group(['prefix'=> 'section', 'as' => 'section.'], function() {
        Route::get('/', [AdminMainController::class, 'sectionPage'])->name('all');
        Route::get('/create', [AdminMainController::class, 'sectionCreatePage'])->name('create.page');
        Route::post('/create', [AdminMainController::class, 'sectionCreate'])->name('create');
        Route::get('/edit/{id}', [AdminMainController::class, 'sectionEditPage'])->name('edit');
        Route::post('/update', [AdminMainController::class, 'sectionUpdate'])->name('update');
        Route::post('/delete', [AdminMainController::class, 'sectionRemove'])->name('delete');
        
        Route::get('/sub', [AdminMainController::class, 'subSectionPage'])->name('suball');
        Route::get('/subcreate', [AdminMainController::class, 'subSectionCreatePage'])->name('subcreate.page');
        Route::post('/subcreate', [AdminMainController::class, 'subSectionCreate'])->name('subcreate');
        Route::get('/sub/edit/{id}', [AdminMainController::class, 'subSectionEditPage'])->name('subedit');
        Route::post('/sub/update', [AdminMainController::class, 'subSectionUpdate'])->name('subupdate');
        Route::post('/sub/delete', [AdminMainController::class, 'subSectionRemove'])->name('subdelete');
        
    });
    
    Route::group(['prefix'=> 'category', 'as' => 'category.'], function() {
        Route::get('/', [AdminMainController::class, 'categoryPage'])->name('all');
        Route::get('/create', [AdminMainController::class, 'categoryCreatePage'])->name('create.page');
        Route::post('/create', [AdminMainController::class, 'categoryCreate'])->name('create');
        Route::get('/edit/{id}', [AdminMainController::class, 'categoryEditPage'])->name('edit');
        Route::post('/update', [AdminMainController::class, 'categoryUpdate'])->name('update');
        Route::post('/delete', [AdminMainController::class, 'categoryRemove'])->name('delete');
    });

    Route::group(['prefix'=> 'author', 'as' => 'author.'], function() {
        Route::get('/', [AdminMainController::class, 'authorPage'])->name('all');
        Route::get('/create', [AdminMainController::class, 'authorCreatePage'])->name('create.page');
        Route::post('/create', [AdminMainController::class, 'authorCreate'])->name('create');
        Route::get('/edit/{id}', [AdminMainController::class, 'authorEditPage'])->name('edit');
        Route::post('/update', [AdminMainController::class, 'authorUpdate'])->name('update');
        Route::post('/delete', [AdminMainController::class, 'authorRemove'])->name('delete');
    });
    
    Route::group(['prefix'=> 'posts', 'as' => 'posts.'], function() {
        Route::get('/', [AdminMainController::class, 'postPage'])->name('all');
        Route::get('/create', [AdminMainController::class, 'postCreatePage'])->name('create');
        Route::post('/getsubmenu', [AdminMainController::class, 'getSubMenuAjax'])->name('getsubmenu');
        Route::get('/edit/{id}', [AdminMainController::class, 'postEditPage'])->name('edit');
    });

    Route::group(['prefix'=> 'user', 'as' => 'user.'], function() {
        Route::get('/', [AdminMainController::class, 'userPage'])->name('all');
        Route::get('/edit/{id}', [AdminMainController::class, 'userEditPage'])->name('edit');
        Route::post('/update', [AdminMainController::class, 'userUpdate'])->name('update');
        Route::get('/create', [AdminMainController::class, 'userCreatePage'])->name('create.page');
        Route::post('/create', [AdminMainController::class, 'userCreate'])->name('create');
        Route::post('/delete', [AdminMainController::class, 'userRemove'])->name('delete');
    });

    Route::group(['prefix'=> 'subscriber', 'as' => 'subscriber.'], function() {
        Route::get('/', [AdminMainController::class, 'subscribePage'])->name('all');
        Route::get('/mail', [AdminMainController::class, 'subscribeMailPage'])->name('mail');
        Route::post('/delete', [AdminMainController::class, 'subscribeRemove'])->name('delete');
        Route::get('/distribution', [AdminMainController::class, 'distributionPage'])->name('distribution');
        Route::post('/distribution', [AdminMainController::class, 'distributionStore'])->name('distributionStore');
    });

    Route::group(['prefix' => 'post', 'as' => 'post.'], function() {
        Route::post('/create', [AdminMainController::class, 'postCreate'])->name('create');
        Route::post('/update', [AdminMainController::class, 'postUpdate'])->name('update');
        Route::post('/delete', [AdminMainController::class, 'postRemove'])->name('delete');
    });

    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function() {
        Route::get('/', [AdminMainController::class, 'bannerPage'])->name('all');
        Route::get('/create', [AdminMainController::class, 'bannerCreatePage'])->name('create.page');
        Route::post('/create', [AdminMainController::class, 'bannerCreate'])->name('create');
        Route::get('/edit/{id}', [AdminMainController::class, 'bannerEditPage'])->name('edit');
        Route::post('/update', [AdminMainController::class, 'bannerUpdate'])->name('update');
        Route::post('/delete', [AdminMainController::class, 'bannerRemove'])->name('delete');
    });
    
    Route::get('/authors', [AdminMainController::class, 'authorPage'])->name('authors');
    Route::get('/users', [AdminMainController::class, 'userPage'])->name('users');
    Route::get('/subscribers', [AdminMainController::class, 'subscribePage'])->name('subscribers');

});


Route::get('/likstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
});