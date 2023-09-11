<?php

use App\Http\Controllers\Api\UsuarioControlador;
use App\Http\Controllers\AppTransaction;
use Illuminate\Support\Facades\Route;

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



Route::get('/google-login', [UsuarioControlador::class, 'google_login'])->name('login');
Route::get('/google-callback', [UsuarioControlador::class, 'google_login']);


Route::middleware(['cookauth'])->group(function () {
    Route::get('/transaction.app', [AppTransaction::class, 'app_index'])->name('index');
});