<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Dials;
use App\Models\Type;

class c_dials extends Controller
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
        $data_dials = Dials::where('deleted', false)->get();
        $data_type = Type::where('deleted', false)->get();
         return view('dashboard.category.index', compact('category','data_size','data_dials','data_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $model = new Dials(); 
        
         return view('dashboard.category.create_category', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Dials();
        $model->name = $request->name;
        $model->cat_id = $request->cat_id;
        $model->size_id = $request->size_id;
        $model->type_id = $request->type_id;
        $model->year = $request->year;
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
