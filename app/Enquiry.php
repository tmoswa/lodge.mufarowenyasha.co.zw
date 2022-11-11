<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    //
    protected $fillable=[
        'checkin_date','checkout_date','adults','children','room_name',
    ];
}
