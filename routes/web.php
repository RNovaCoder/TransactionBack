<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\UsuarioControlador;
use App\Http\Controllers\AppTransaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return redirect('/yapefy');
});



Route::middleware(['cookauth'])->group(function () {
    Route::get("/usuario/cerrar.sesion", [UsuarioControlador::class, 'cerrar_sesion']);

    Route::get('/yapefy{any?}', function () {
        return view('yapefy');
    })->where('any', '.*')->name('index');

    Route::get('/welcome', function () {
        return view('logout');
    });

});
