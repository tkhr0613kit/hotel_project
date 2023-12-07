<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guest.index', ['guests' => $guests]);
    }

    public function add()
    {
        return view('guest/add');
    }

    public function create(Request $request)
    {
        $param = Guest::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'address' => $request->address,
        ]);
        return view('guest/create',['param'=>$param]);
    }
}
