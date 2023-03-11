<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProducController;
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
    return view('index');
})->name('index');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('ofertas', function () {
    return view('ofertas');
})->name('ofertas');

Route::get('promociones', function () {
    return view('promo');
})->name('promo');

Route::get('ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('listar-prductos', [ProducController::class, 'listar_productos']);
