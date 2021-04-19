<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PaisController;
use App\Http\Controllers\Admin\EstadoController;
use App\Http\Controllers\Admin\MunicipiosController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\TipoOperacionController;
use App\Http\Controllers\Admin\TipoPropiedadController;
use App\Http\Controllers\Admin\FacilidadController;
use App\Http\Controllers\Admin\AdicionalController;
use App\Http\Controllers\Admin\InstalacionController;
use App\Http\Controllers\Admin\EmpresaController;
 
Route::get('/admin', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('Usuarios', UserController::class)->names('admin.users');
Route::post('Usuarios/{rol}', [UserController::class, 'role'])->name('users.role');
Route::post('Usuarios/{permission}', [UserController::class, 'permission'])->name('users.permission');

Route::resource('Roles', RoleController::class)->names('admin.rol');
Route::resource('Permisos', PermissionController::class)->names('admin.permissions');

Route::resource('Pais', PaisController::class)->names('admin.pais');
Route::resource('Estado', EstadoController::class)->names('admin.estado');
Route::resource('Municipio', MunicipiosController::class)->names('admin.municipio');
Route::resource('Sector', SectorController::class)->names('admin.sector');
Route::resource('Tipo_operacion', TipoOperacionController::class)->names('admin.t_operacion');
Route::resource('Tipo_propiedad', TipoPropiedadController::class)->names('admin.t_propiedad');
/*Tags Propiedades */
Route::resource('Facilidad', FacilidadController::class)->names('admin.facilidad');
Route::resource('Adicional', AdicionalController::class)->names('admin.adicional');
Route::resource('Instalacion', InstalacionController::class)->names('admin.instalacion');
/*Sobre la empresa datos genericos */
Route::resource('Empresa', EmpresaController::class)->names('admin.empresa');

