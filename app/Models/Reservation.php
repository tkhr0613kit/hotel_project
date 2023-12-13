<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Reservation extends Model
{
    use HasFactory;

    // 主キーにid以外の名前を付けているので指定
    protected $primaryKey = 'reservation_id';

    public function guest() {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Models\Guest', 'guest_id','guest_id');
    }

    public function reserve_lists(){
       return $this->belongsToMany(Room::class,'reserve_lists','room_id','reservation_id');
    }

}
