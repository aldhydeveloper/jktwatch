<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $attributes = [
        'cat_id' => 1,
        'dial_id' => 1,
        'size_id' => 1,
        'year' => "2022",
    ];
    
    protected $table = "types";
}
