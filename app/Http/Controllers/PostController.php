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

        return view('posts', ['posts' => $posts->where('menu_id', $category)->take(6)->get(), 'menu' => $submenu, 'parentCategory' => $category]);
    }

    // Get category posts
    public function categoryPosts ($category, $submenu) {

        $posts = Post::where('category_id', $submenu)->get();
        $submenuList = Submenu::where('parent_id', $category)->get();
        $currentCategory = Submenu::where('id', $submenu)->where('parent_id', $category)->first();

        // dd($posts[0]->category->title);

        return view('posts', ['posts' => $posts, 'menu' => $submenuList, 'category' => $currentCategory, 'parentCategory' => $category]);
    }

    // Get single post
    public function singlePost ($menu, $submenu, $post) {

        $post = Post::find($post);
        $category = PostCategory::where('id', $post->category_id)->first();
        $submenuList = Submenu::where('parent_id', $menu)->get();
        // $currentCategory = Submenu::where('id', $submenu)->where('parent_id', $menu)->first();

        return view('post', ['post' => $post, 'category' => $category, 'parentCategory' => $menu, 'menu' => $submenuList]); // 'author' => $author,
    }


}
