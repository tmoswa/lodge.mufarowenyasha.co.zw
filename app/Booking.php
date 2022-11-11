<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable=[
        'checkin_date','checkout_date','adults','children','room_name','name','phone','email','amount',
    ];
}

