<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;

class c_models extends Controller
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
        $data_model = Type::where('deleted', false)->get();
         return view('dashboard.category.index', compact('category','data_size','data_dials','data_model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $model = new Models(); 
        
         return view('dashboard.category.create_models', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $model = new Models();
        $model->name = $request->name;
        $model->cover = "";
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
    public function edit(Models $models)
    {
        
         return view('dashboard.category.edit_models', compact('models'));
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
         $model = Models::find($id);
        $model->name = $request->name;
        $model->cover = $request->cover;
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
         $model = Models::find($id);
        $model->deleted = true;
        $model->save();

    }
}
