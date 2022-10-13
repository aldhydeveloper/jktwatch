<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sizes()
    {
        return $this->belongsTo(\App\Models\Size::class, 'size_id');
    }



}
