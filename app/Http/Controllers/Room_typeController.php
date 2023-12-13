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

    public function create(Request $request)
    {
        $param = Room_type::create([
            'room_name' => $request->room_name,
            'room_capacity' => $request->room_capacity,
        ]);
        return view('room_type/create',['param'=>$param]);
    }
    
}
