<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function pageView () {

        $menu = new Menu();

        return view('index', ['menu' => $menu->all()]);
    }
}