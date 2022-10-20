<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function size()
    // {
    //     return $this->belongsTo(\App\Models\Size::class, 'size_id');
    // }

    // public function type()
    // {
    //     return $this->belongsTo(\App\Models\Type::class, 'type_id');
    // }

    // public function category()
    // {
    //     return $this->belongsTo(\App\Models\Category::class, 'cat_id');
    // }

    // public function dial()
    // {
    //     return $this->belongsTo(\App\Models\Dials::class, 'dial_id');
    // }
}
