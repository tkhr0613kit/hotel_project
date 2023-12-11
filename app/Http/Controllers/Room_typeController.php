<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room_type;

class Room_typeController extends Controller
{
    public function index()
    {
        $room_types = Room_type::all();

        return view('room_type.index', ['room_types' => $room_types]);
    }
    
}
