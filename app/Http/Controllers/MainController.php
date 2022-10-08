<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view("dashboard.index");
    }
    function product()
    {
        return view("dashboard.product.products");
    }
    function create_product()
    {
     return view("dashboard.product.create_products");
    }
    
    function category()
    {
        return view("dashboard.category.index");
    }

    
    function all_collections()
    {
        return view("dashboard.collections.index");
    }
}
