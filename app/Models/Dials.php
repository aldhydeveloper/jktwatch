<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dials extends Model
{
    use HasFactory;

    protected $attributes = [
        'cat_id' => 1,
        'size_id' => 1,
        'type_id' => 1,
        'year' => "2022",
    ];
    
    protected $table = "dials";
}
