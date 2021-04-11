<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});
Route::get('/proyectos', function () {
    return view('front.proyectos');
})->name('front.proyectos');
Route::get('/vender', function () {
    return view('front.vender');
})->name('front.vender');
Route::get('/servicios', function () {
    return view('front.servicios');
})->name('front.servicios');
Route::get('/contacto', function () {
    return view('front.contacto');
})->name('front.contacto');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
