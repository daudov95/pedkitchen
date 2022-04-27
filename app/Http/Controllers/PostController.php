<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Menu;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Submenu;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Get all posts
    public function allPosts ($category) {

        $posts = new Post();
        $submenu = Submenu::where('parent_id', $category)->get();

        return view('posts', ['posts' => $posts->all(), 'menu' => $submenu]);
    }

    // Get category posts
    public function categoryPosts ($category, $submenu) {

        $posts = Post::where('category_id', $submenu)->get();
        $submenuList = Submenu::where('parent_id', $category)->get();
        $currentCategory = Submenu::where('id', $submenu)->where('parent_id', $category)->first();
        // $menu = $submenu->where();

        // dd($submenuList);

        return view('posts', ['posts' => $posts, 'menu' => $submenuList, 'category' => $currentCategory]);
    }

    // Get single post
    public function singlePost (Post $post) {

        // $post = new Post();
        // dd($post);

        $category = PostCategory::where('id', $post->category_id)->first();
        $author = Author::where('id', $post->author_id)->first();

        // dd($author);

        
        // dd($menu->all());
        // $menu = ['Витрина', 'Педагогические ситуации и их решения', 'new', 'new 2', 'Мои избранные рецепты'];

        return view('post', ['post' => $post, 'category' => $category, 'author' => $author]);
    }


}
