<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interfaz', function () {
    return view('interfaz');
});

Route::get('/enlaces', function () {
    return view('enlaces');
})->name('enlace');

Route::get('/flights',[FlightController::class, 'index'])->name('flights.index');
Route::get('/post',[\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
