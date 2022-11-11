<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable=[
'name','description','price','picture1','picture2','picture3','picture4','picture5',
'picture6','picture7','picture8','picture9','picture10','acceptable_adults','acceptable_childen',
'booked_from','booked_to','status','number_of_rooms','number_of_booked','url_name','additional_information','reviews_overal','reviews_percentages'
    ];
}
