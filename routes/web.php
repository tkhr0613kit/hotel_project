<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/room',[RoomController::class,'index']);

Route::get('/room/add',[RoomController::class,'add']);
Route::get('/room/create',[RoomController::class,'create']);
