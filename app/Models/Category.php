<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = "categories";


    protected $fillable = ["cat_name","cover","deleted"];



    public function size(){
      $this->belongsTo(\App\Models\Size::class, 'size_id');
    }

}
