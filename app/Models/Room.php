<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    public static $rules = array(
        'room_type_id' => 'required',
        'room_number' => 'required'
    );

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
