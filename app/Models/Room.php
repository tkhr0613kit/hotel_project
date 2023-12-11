<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public function getData() 
   {
    return
    $this->room_id. ':'.
    $this->room_number;

   }
       
    

    public function room_type()
    {
        return $this->belongsTo('App\Room_type');
    }

    
}
