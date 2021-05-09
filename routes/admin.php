<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('usuarios', UserController::class)->names('admin.users');
Route::post('usuarios/{rol}', [UserController::class, 'role'])->name('users.role');
Route::post('usuarios/{permission}', [UserController::class, 'permission'])->name('users.permission');

Route::resource('roles', RoleController::class)->names('admin.rol');
Route::resource('permisos', PermissionController::class)->names('admin.permissions');