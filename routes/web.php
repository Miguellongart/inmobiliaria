<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
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
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/Propiedades', [FrontController::class, 'propiedades'])->name('front.propiedades');
Route::get('/Proyectos', [FrontController::class, 'proyectos'])->name('front.proyectos');
Route::get('/Vender', [FrontController::class, 'vender'])->name('front.vender');
Route::get('/Servicios', [FrontController::class, 'servicios'])->name('front.servicios');
Route::get('/Contacto', [FrontController::class, 'contacto'])->name('front.contacto');
Route::get('/Propiedad/{slug}', [FrontController::class, 'detallePropiedad'])->name('front.detailprop');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
