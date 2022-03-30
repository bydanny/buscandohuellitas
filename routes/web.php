<?php

use Illuminate\Support\Facades\Route;
use App\Pet;
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

/*
Route::get('/', function () {
    return view('bienvenido');
});
*/

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('/import', [App\Http\Controllers\ImportController::class, 'import'])->name('import');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hm', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('user/micuenta', [App\Http\Controllers\UserController::class, 'cuenta'])->name('user.cuenta');

// Rutas Mascotas (Pets)
Route::get('pet/index', [App\Http\Controllers\PetController::class, 'index'])->name('pet.index');

