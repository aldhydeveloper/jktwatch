<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Collection;
use App\Models\Dials;

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
        $data_dials = Dials::where('deleted', false)->get();
        
         return view('dashboard.collections.create',  compact('category','data_size','data_dials'));
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
        $model->color = "black";
        $model->price = $request->price;
        $model->cat_id = $request->category;
        $model->dial_id = $request->dial;
        $model->size_id = $request->size;
        $model->type_id = 0;
        $model->year = "2022";
        $model->image_thumbnail = $request->file('image')->store('collections');
        $model->image_1 = $request->file('image')->store('collections');
        $model->image_2 = $request->file('image')->store('collections');
        $model->image_3 = $request->file('image')->store('collections');
        $model->deleted = false;
        $model->save();

        return redirect('collections\all');
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
        // $size = $request->size;
        // $category = Category::where('deleted', false)->get();
        // $data_size = Size::where('deleted', false)->get();
        // $data_collection = [];
        // if ($id === 'all') {
        //     $data_collection = Collection::where('deleted', false);
        //     if($size){
        //         $data_collection = $data_collection->where('size_id', $size);
        //     }
        //     $data_collection = $data_collection->get();
        // }
        // // dd($data_collection);
        
        $title = $id;
        // foreach ($category as $cat) {
        //     if ($cat->cat_name === $id) {
        //         $data_collection = Collection::where('deleted', false)->where('cat_id', $cat->id);
        //         if($size){
        //             $data_collection = $data_collection->where('size_id', $size);
                    
        //         }
        //         $data_collection = $data_collection->get();
                
        //     }
            
        // }
        // dd(\Request::query());
        $query = $request->query();
        $q = count($query) > 0 ? '?' : '&';
        // dd(\Request::getRequestUri());
        $size = $request->size;
        $category = $request->category;
        $dial = $request->dial;
        $type = $request->type;
        $collection = $this->getCollection($size, $category, $dial, $type);
        // dd($collection);
        //  return view('dashboard.collections.index', compact('collection','title'));
        //  return view('dashboard.collections.index', compact('category','data_size','data_collection','title'));
        return view('dashboard.collections.index', [
          'data' => $collection,
          'title' => $title,
          'q' => $q,
          'size' => $size,
          'category' => $category,
          'dial' => $dial,
          'type' => $type,
        ]);
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

    public function getCollection($size, $category, $dial, $type){
      $collection = Collection::with('size')->with('type')->with('category')->with('dial');
      if($size){
          $collection = $collection->where('size_id', $size);
      }
      if($category){
          $collection = $collection->where('cat_id', $category);
      }
      if($dial){
          $collection = $collection->where('dial_id', $dial);
      }
      if($type){
          $collection = $collection->where('type_id', $type);
      }
      $collection = $collection->get();
      // $collection->size;
      // dd($collection->toJson());
      // echo json_encode($collection);
      // exit;
      $size = [];
      $type = [];
      $category = [];
      $dial = [];
      foreach($collection as $v){
        // print_r($v->size);
        $arr_size = $v->size;
        $arr_type = $v->type;
        $arr_category = $v->category;
        $arr_dial = $v->dial;
        // dd($arr_size->count());
        if($arr_size->count() > 0){
          $size[$arr_size->id] = $arr_size->name; 
        }
        // if($arr_type->count() > 0){
        //   $type[$arr_type->id] = $arr_type->name; 
        // }
        if($arr_category->count() > 0){
          $category[$arr_category->id] = $arr_category->cat_name; 
        }
        if($arr_dial->count() > 0){
          $dial[$arr_dial->id] = $arr_dial->name; 
        }
      }

      $response['collection'] = $collection->toArray(); 
      $response['size'] = $size; 
      $response['type'] = $type; 
      $response['category'] = $category; 
      $response['dial'] = $dial; 
      // echo json_encode($response);
      // exit;

      return (object) $response;
    }
}
