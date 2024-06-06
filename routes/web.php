<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'YUDISTIRA'
    ]);
})->name('home')->middleware('guest');
Route::get('/about', function () {
    return view('about', [
        'title' => 'YUDISTIRA | About'
    ]);
})->name('about')->middleware('guest');

//Route Register
Route::get('register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [UserController::class, 'register_store']);

//Route login
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'login_authenticate']); //nama bebas bagian autenticate
Route::post('logout', [UserController::class, 'logout'])->middleware('auth'); //nama bebas bagian autenticate

//Route Reservasi
Route::resource('reservation', ReservasiController::class)->middleware('guest');

//Route Reservasi
Route::resource('dashboard', DashboardController::class);

Route::get('/available', [ReservasiController::class, 'available'])->name('room')->middleware('guest');

Route::get('/reservation/create/{id}', [ReservasiController::class, 'create'])->name('reservasi.create');




