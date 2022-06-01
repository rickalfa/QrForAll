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
    return view('welcome');
});


Route::get('welcome', function () {
  return view('welcome');
});

Route::get('about', function(){

  return view('scmod.index');

});

Auth::routes();

/**
 * Rutas de acceso para los administradores
 */

  Route::group(['middleware' => ['role:admin_level3|admin_level2']], function()
  {

    Route::resource('user-app', App\Http\Controllers\UserAppController::class);
    Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth')->except(['destroy']);
    Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth')->except(['destroy']);
    Route::resource('user-qrs', App\Http\Controllers\UserQrController::class)->middleware('auth')->except(['destroy']);

    /**
     * Grupo de rutas de nivel 3
     * accceso a las rutas de administrador nivel 3 
     */
    Route::group(['middleware' => ['role:admin_level3']], function(){


        Route::resource('permissions', App\Http\Controllers\PermissionController::class)->middleware('auth');
        Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('auth');
        Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');

        Route::resource('user-qrs', App\Http\Controllers\UserQrController::class)->middleware('auth')->except(['index','update','edit','show']);

        Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth')->except(['index','update','edit','show']);
        Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth')->except(['index','update','edit','show']);

    });



  });
   
   
/**
 * Rutas de acceso Publicas
 */


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
