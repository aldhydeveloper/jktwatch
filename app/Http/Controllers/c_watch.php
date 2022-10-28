<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Collection;
use App\Models\Dials;
use App\Models\Models;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class c_watch extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function form($id)
    {
        $category = Category::where('deleted', false)->get();
        $data_size = Size::where('deleted', false)->get();
        $data_dials = Dials::where('deleted', false)->get();
        $data_model = Models::where('deleted', false)->get();
        $data_brand = Brand::where('deleted', false)->get();

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
        
         return view('products.index',  compact('category','data_size','data_dials', 'collections', 'tags','data_model','data_brand'));
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = $id;
        $query = $request->query();
        $q = count($query) > 0 ? '?' : '&';
        // dd(\Request::getRequestUri());
        $size = $request->size;
        $category = $request->category;
        $dial = $request->dial;
        $type = $request->type;
        $models = $request->models;
        $brand = $request->brand;
        $collection = $this->getCollection_v2($request);
        // dd($collection);
        $tags = new \stdClass;
        $tags->category = [];
        $tags->size = [];
        $tags->dial = [];
        $tags->models = [];
        $tags->brand = [];
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
          
          $collection[$k]->models = [];   
          if(isset($arr_tags->models)){
            foreach($arr_tags->models as $kModels => $vModels){
              $modelsModel = Models::find($vModels);
              if($modelsModel){
                $collection[$k]->models[$vModels] = $modelsModel->name;
                $tags->models[$vModels] = $modelsModel->name;
              }
            }
          }
          
          $collection[$k]->brand = [];   
          if(isset($arr_tags->brand)){
            foreach($arr_tags->brand as $kBrand => $vBrand){
              $brandModel = Brand::find($vBrand);
              if($brandModel){
                $collection[$k]->brand[$vBrand] = $brandModel->name;
                $tags->brand[$vBrand] = $brandModel->name;
              }
            }
          }
        }
        // dd($models);
        return view('watch.index', [
          'collection' => $collection,
          'title' => $title,
          'tags' => $tags,
          'q' => $q,
          'size' => $size,
          'category' => $category,
          'dial' => $dial,
          'type' => $type,
          'models' => $models,
          'brand' => $brand,
        ]);
    }

    public function getCollection_v2($request){
      $params = $request->all();
      // dd($params);
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
