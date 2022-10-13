<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = "sizes";

    protected $attributes = [
        'cat_id' => 1,
        'dial_id' => 1,
        'type_id' => 1,
        'year' => "2022",
    ];
}
