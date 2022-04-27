<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function pageWishlist () {

        $posts = Wishlist::where('user_id', 1)->get();
        // $submenu = Submenu::where('parent_id', $category)->get();
        // dd($posts->all());

        return view('wishlist', ['posts' => $posts]);
    }
}