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
    return view('pagina.index');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('pagina.nosotros');
})->name('nosotros');

Route::get('/contactanos', function () {
    return view('pagina.contactanos');
})->name('contactanos');

Route::get('/maestria/1', function () {
    return view('pagina.maestria.1');
})->name('maestria.1');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
/*
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
