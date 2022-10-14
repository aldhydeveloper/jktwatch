<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = "categories";


    protected $fillable = ["cat_name","deleted"];


    protected $attributes = [
        'size_id' => 1,
        'dial_id' => 1,
        'type_id' => 1,
        'year' => "2022",
    ];

    public function size(){
      $this->belongsTo(\App\Models\Size::class, 'size_id');
    }

}
