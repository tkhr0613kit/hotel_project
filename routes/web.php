<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

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

// Route::get('', [GuestController::class, ''])->name('');

Route::get('guest',[GuestController::class, 'index'])->name('guest');

Route::get('guest/add', [GuestController::class, 'add'])->name('guest/add');
Route::post('guest/add', [GuestController::class, 'create'])->name('guest/create');