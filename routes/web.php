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
    return view('home', ['title2' => 'La única urbanización ecológica']);
})->name('home');

Route::get('/urbanizacion', function () {
    return view('urbanizacion', ['title' => 'Urbanización']);
})->name('urbanizacion');

Route::get('/nosotros', function () {
    return view('nosotros', ['title' => 'Nosotros']);
})->name('nosotros');

Route::get('/nuestros-disenos', function () {
    return view('casas-modelo', ['title' => 'Casas Modelo']);
})->name('nuestros-disenos');

Route::get('/servicios', function () {
    return view('servicios', ['title' => 'Servicios']);
})->name('servicios');

Route::get('/contacto', function () {
    return view('contacto', ['title' => 'Contacto']);
})->name('contacto');

Route::post('/contacto', 'ContactController@store')->name('contacto.store');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
