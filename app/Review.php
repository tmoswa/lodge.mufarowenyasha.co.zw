<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable=[
        'room_name','name','phone','email','comment','rating',
    ];
}
