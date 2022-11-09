<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Collection;
use App\Models\Dials;
use App\Models\Models;
use App\Models\Brand;

class HomeController extends Controller
{
    function index()
    {
        
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
        $data_dials = Dials::where('deleted', false)->get();
        $data_model = Models::where('deleted', false)->get();
        $data_brand = Brand::where('deleted', false)->get();
        $collections = Collection::where('deleted', false)->latest()->take(5)->get();
        
        $women = Category::where('id', 2)->get();
        $man = Category::where('id', 1)->get();
        $sporty = Category::where('id', 3)->get();
        $title = "Home";
        // dd($women);
        return view("home.index",compact('title','category','data_size','data_dials','data_model','data_brand','collections','women','man','sporty'));
    }
    function watches()
    {   
        return view("home.watches",["title" => "Watches"]);
    }
    function about()
    {   
        return view("home.about",["title" => "About Us"]);
    }
    
    function sell()
    {   
        return view("home.sell-with-us",["title" => "Sell With Us"]);
    }
}
