<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Get all posts
    public function allPosts () {

        $posts = new Post();
        // dd($posts->all());

        return view('posts', ['posts' => $posts->all()]);
    }


    public function singlePost (Post $post) {

        // $post = new Post();
        // dd($post);

        return view('post', ['post' => $post]);
    }


}
