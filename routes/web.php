<?php

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
    return view('home');
})->name('home');

Route::get('/la-urbanizacion', function () {
    return view('urbanizacion');
})->name('urbanizacion');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
