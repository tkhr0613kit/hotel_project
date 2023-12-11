<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::all();

        return view('room.index',['rooms' => $rooms]);
    }

    public function add(Request $request)
    {
        return view(('room.add'));
    }

    public function create(Request $request)
    {
        return redirect('/room');
    }
}
