<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Collection;
use App\Models\Dials;
use Illuminate\Support\Facades\DB;

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function form($id)
    {
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
        $data_dials = Dials::where('deleted', false)->get();

        $collections = Collection::find($id);
        $tags = [];
        $i = 0;
        if($collections){
          $arr_tags = json_decode($collections->tags);
          foreach($arr_tags as $k => $v){
            foreach($v as $v2){
              $tags[$i] = $k . '-' .$v2;
              $i++;
            }
            // if(isset($v->category)){
            //   foreach($v->category){

            //   }
            // }
          }
          // dd($tags);
        }
        // dd($collections);
        
         return view('dashboard.collections.create',  compact('category','data_size','data_dials', 'collections', 'tags'));
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->tags);
        $tags = [];
        $i = 0;
        if($request->tags){
          foreach($request->tags as $v){
            $arr_tags = explode('-' ,$v);
            if(!isset($tags[$arr_tags[0]])){
              $i=0;
              $tags[$arr_tags[0]][$i] = (int) $arr_tags[1];
              $i++;
            }else{
              $tags[$arr_tags[0]][$i] = (int) $arr_tags[1];
              $i++;
            }
          }
        }
            // dd($tags);
        // $request->file('image')->store('collections')
        $id = $request->id;
        if(!$id){
          $model = new Collection();
        }else{
          $model = Collection::find($id);
        }
        $model->name = $request->name;
        $model->color = "black";
        $model->price = $request->price;
        $model->tags = !empty($tags) ? json_encode($tags) : null;
        // $model->cat_id = $request->category;
        // $model->dial_id = $request->dial;
        // $model->size_id = $request->size;
        // $model->type_id = 0;
        $model->year = "2022";
        $model->image_thumbnail = '';
        $model->image_1 = '';
        $model->image_2 = '';
        $model->image_3 = '';
        
        if($_FILES['image']['name'] != ''){
          $model->image_thumbnail = $request->file('image')->store('collections');
        }
        if($_FILES['image_1']['name'] != ''){
          $model->image_thumbnail = $request->file('image_1')->store('collections');
        }
        if($_FILES['image_2']['name'] != ''){
          $model->image_thumbnail = $request->file('image_2')->store('collections');
        }
        if($_FILES['image_3']['name'] != ''){
          $model->image_thumbnail = $request->file('image_3')->store('collections');
        }
        // $model->image_2 = $request->file('image')->store('collections');
        // $model->image_3 = $request->file('image')->store('collections');
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
        // dd($query);
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
        $collection = $this->getCollection_v2($request);
        
        $tags = new \stdClass;
        $tags->category = [];
        $tags->size = [];
        $tags->dial = [];
        foreach($collection as $k => $v){
          $arr_tags = json_decode($v->tags);
          if(isset($arr_tags->category)){
            foreach($arr_tags->category as $kCat => $vCat){
              $catModel = Category::find($vCat);
              if($catModel){
                $tags->category[$vCat] = $catModel->cat_name;
              }
            }
          }

          $collection[$k]->size = [];   
          if(isset($arr_tags->size)){
            foreach($arr_tags->size as $kSize => $vSize){
              $sizeModel = Size::find($vSize);
              if($sizeModel){
                $collection[$k]->size[$vSize] = $sizeModel->name;
                $tags->size[$vSize] = $sizeModel->name;
              }
            }
          }

          if(isset($arr_tags->dial)){
            foreach($arr_tags->dial as $kDial => $vDial){
              $dialModel = Dials::find($vDial);
              if($sizeModel){
                $tags->dial[$vDial] = $dialModel->name;
              }
            }
          }
          // foreach(){

          // } 
        }
        // dd($tags);
        // $collection = $this->getCollection($size, $category, $dial, $type);
        // dd($collection);
        //  return view('dashboard.collections.index', compact('collection','title'));
        //  return view('dashboard.collections.index', compact('category','data_size','data_collection','title'));
        return view('dashboard.collections.index', [
          'collection' => $collection,
          'title' => $title,
          'tags' => $tags,
          'q' => $q,
          'size' => $size,
          'category' => $category,
          'dial' => $dial,
          'type' => $type,
        ]);
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

    public function getCollection_v2($request){
      $params = $request->all();
      $contains = [];
      foreach($params as $k => $v){
        $contains[] = "JSON_CONTAINS(tags, $v, '$.$k') > 0";
      }
      $where = implode(' AND ', $contains);
      $where = !empty($where) ? $where . ' AND deleted = 0' : 'deleted = 0';
      // dd($where);
      $collection = DB::select("SELECT * FROM collections WHERE $where ");

      return $collection;
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
