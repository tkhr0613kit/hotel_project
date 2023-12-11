<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    public function reserve_lists(){
       return $this->belongsToMany('Room::class','reserve_lists','reservation_id','room_id');
    }

}
