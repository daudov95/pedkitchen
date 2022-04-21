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
        $menu = ['Витрина', 'Педагогические ситуации и их решения', 'new', 'Мои избранные рецепты'];

        return view('posts', ['posts' => $posts->all(), 'menu' => $menu]);
    }


    public function singlePost (Post $post) {

        // $post = new Post();
        // dd($post);
        $menu = ['Витрина', 'Педагогические ситуации и их решения', 'new', 'new 2', 'Мои избранные рецепты'];

        return view('post', ['post' => $post, 'menu' => $menu]);
    }


}
