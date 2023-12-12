<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    protected $primaryKey = 'room_type_id';

    protected $fillable = ['room_name','room_capacity'];
}
