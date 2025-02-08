<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IniciativaController;
use App\Http\Controllers\OrdenadorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('iniciativa', IniciativaController::class);
Route::resource('ordenador', OrdenadorController::class);
