<?php

use App\Http\Controllers\api\ApiController;
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
use App\Http\Controllers\Admin\PropiedadController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\NosotroController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\RedSocialController;

Route::get('/admin', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('Usuarios', UserController::class)->names('admin.users');
Route::post('Usuarios/{rol}', [UserController::class, 'role'])->name('users.role');
Route::post('Usuarios/{permission}', [UserController::class, 'permission'])->name('users.permission');

Route::resource('Roles', RoleController::class)->names('admin.rol');
Route::resource('Permisos', PermissionController::class)->names('admin.permissions');

Route::resource('Pais', PaisController::class)->names('admin.pais');
Route::resource('Estado', EstadoController::class)->names('admin.estado');
Route::get('/Pais/{id}/Estado', [EstadoController::class, 'addestado'])->name('admin.addestado');
Route::resource('Municipio', MunicipiosController::class)->names('admin.municipio');
Route::get('/Estado/{id}/Municipio', [MunicipiosController::class, 'addmunicipio'])->name('admin.addmunicipio');
Route::resource('Sector', SectorController::class)->names('admin.sector');
Route::get('/Municipio/{id}/Sector', [SectorController::class, 'addsector'])->name('admin.addsector');
Route::resource('Tipo_operacion', TipoOperacionController::class)->names('admin.t_operacion');
Route::resource('Tipo_propiedad', TipoPropiedadController::class)->names('admin.t_propiedad');
/*Tags Propiedades */
Route::resource('Facilidad', FacilidadController::class)->names('admin.facilidad');
Route::resource('Adicional', AdicionalController::class)->names('admin.adicional');
Route::resource('Instalacion', InstalacionController::class)->names('admin.instalacion');
Route::resource('SobreNosotros', NosotroController::class)->names('admin.nosotro');
/*Sobre la empresa datos genericos */
Route::resource('Empresa', EmpresaController::class)->names('admin.empresa');
Route::resource('Servicios', ServicioController::class)->names('admin.servicio');
Route::resource('RedesSociales', RedSocialController::class)->names('admin.redsocial');
/*propieda*/
Route::resource('Propiedad', PropiedadController::class)->names('admin.propiedad');
Route::get('/Galeria/{id}/propiedad', [PropiedadController::class, 'galeriaForm'])->name('admin.propiedad.addGal');
Route::post('/PropiedadGaleria/store', [PropiedadController::class, 'dropzoneStore'])->name('admin.propiedad.dropzonestore');
/*proyectos*/
Route::resource('Proyectos', ProyectoController::class)->names('admin.proyecto');
Route::get('/Galeria/{id}/proyecto', [ProyectoController::class, 'galeriaForm'])->name('admin.proyecto.addGal');
Route::post('/ProyectoGaleria/store', [ProyectoController::class, 'dropzoneStore'])->name('admin.proyecto.dropzonestore');

Route::post('/Estado/json/', [ApiController::class, 'getEstado'])->name('getEstado');
Route::post('/Municipio/json/', [ApiController::class, 'getMunicipio'])->name('getMunicipio');
Route::post('/Localidad/json/', [ApiController::class, 'getLocalidad'])->name('getLocalidad');
