<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room_type;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    

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
       
    protected $primaryKey = 'room_id';

    //子から親を呼びたいときはBelongsTO
    public function room_type():BelongsTo 
    {
        // テーブルの指定、子テーブルの外部キー、対応する親テーブルの外部キー
        return $this->belongsTo(Room_type::class,'room_type_id','room_type_id');
    }

    


}
