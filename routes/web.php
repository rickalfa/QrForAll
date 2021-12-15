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
    return view('home');
});

Auth::routes();

Route::resource('user-app', App\Http\Controllers\UserAppController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('user-qrs', App\Http\Controllers\UserQrController::class);

Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('permissions', App\Http\Controllers\PermissionController::class)->middleware('auth');







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
