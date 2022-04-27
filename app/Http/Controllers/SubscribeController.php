<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function pageView (Request $request, $category) {

        // dd($category);
        return view('subscribe');
    }
}