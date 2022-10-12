<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
         return view('dashboard.category.index', compact('category','data_size'));
        // return $dataTables->render('dashboard.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $model = new Category(); 
        
         return view('dashboard.category.create_category', compact('model'));
    }
    // public function create_size()
    // {

    //     $model = new Size(); 
        
    //      return view('dashboard.category.create_category', compact('model'));
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Category();
        $model->cat_name = $request->cat_name;
        $model->deleted = false;
        $model->save();

        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
         return view('dashboard.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Category::find($id);
        $model->cat_name = $request->cat_name;
        $model->deleted = false;
        $model->save();

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $model = Category::find($id);
        $model->deleted = true;
        $model->save();

        return redirect('category');
    }
}
