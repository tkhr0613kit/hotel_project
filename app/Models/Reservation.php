<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // 主キーにid以外の名前を付けているので指定
    protected $primaryKey = 'reservation_id';

    public function guest() {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Guest', 'guest_id','guest_id');
    }
}
