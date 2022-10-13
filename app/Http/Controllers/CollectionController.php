<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data_collection = Collection::where('deleted', false)->get();
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();

         return view('dashboard.collections.index', compact('category','data_size','data_collection'));
    }

    public function category($id)
    {
        $data_collection = Collection::where('deleted', false)->where('cat_id', id)->get();
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();

         return view('dashboard.collections.index', compact('category','data_size','data_collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
        
         return view('dashboard.collections.create',  compact('category','data_size'));
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
        // $request->file('image')->store('collections')
        $model = new Collection();
        $model->name = $request->name;
        $model->color = $request->color;
        $model->price = $request->price;
        $model->cat_id = $request->category;
        $model->size_id = $request->size;
        $model->image = $request->file('image')->store('collections');
        $model->deleted = false;
        $model->save();

        return redirect('collections');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request )
    {
        // ddd(url()->current());
        $size = $request->size;
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
        $data_collection = [];
        if ($id === 'all') {
            $data_collection = Collection::where('deleted', false);
            if($size){
                $data_collection = $data_collection->where('size_id', $size);
            }
            $data_collection = $data_collection->get();
        }
        // dd($data_collection);
        
        $title = $id;
        foreach ($category as $cat) {
            if ($cat->cat_name === $id) {
                $data_collection = Collection::where('deleted', false)->where('cat_id', $cat->id);
                if($size){
                    $data_collection = $data_collection->where('size_id', $size);
                    
                }
                $data_collection = $data_collection->get();
                
            }
            
        }
         return view('dashboard.collections.index', compact('category','data_size','data_collection','title'));
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
