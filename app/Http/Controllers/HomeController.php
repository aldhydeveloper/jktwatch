<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("home.index",["title" => "Home"]);
    }
    function watches()
    {   
        return view("home.watches",["title" => "Watches"]);
    }
    function about()
    {   
        return view("home.about",["title" => "About Us"]);
    }
}
