<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactClient extends Model
{
    public $fillable = ['name', 'email', 'phone', 'message'];
}
