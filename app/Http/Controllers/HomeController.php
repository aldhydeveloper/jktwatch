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
        $collections = Collection::where('deleted', false)->latest()->take(3)->get();
        $title = "Home";
        
        return view("home.index",compact('title','category','data_size','data_dials','data_model','data_brand','collections'));
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
