<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Dials extends Model
{
    use HasFactory;

    
    protected $table = "dials";

    protected $fillable = [
      'name'
    ];

    protected static function booted()
    {
        // you can do the same thing using anonymous function
        // let's add another scope using anonymous function
        static::addGlobalScope('delete', function (Builder $builder) {
            $builder->where('deleted', false);
        });
    }
}
