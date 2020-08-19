<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'slug', 'type', 'image', 'description', 'price'
    ];


}
