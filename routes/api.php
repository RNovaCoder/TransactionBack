<?php

use App\Http\Controllers\Api\UsuarioControlador;
use App\Http\Controllers\Api\TransaccionControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/ 

Route::post("usuario/registrar", [UsuarioControlador::class, 'usuario_registrar']);

Route::group( ['middleware' => ['cookauth']], function(){   

    //Route::post("{$dir_api_usuario}autenticar", [UsuarioControlador::class, 'autenticar']);
    Route::post("usuario/eliminar.usuario", [UsuarioControlador::class, 'eliminar_usuario']);
    Route::post("usuario/autenticar", [UsuarioControlador::class, 'autenticar']);
    Route::post("usuario/cerrar.sesiones", [UsuarioControlador::class, 'cerrar_sesiones']);

    Route::post('transaccion/registrar', [TransaccionControlador::class, 'registrar']);
    Route::post('transaccion/reset.data', [TransaccionControlador::class, 'resetear']);
    Route::post('transaccion/obtener', [TransaccionControlador::class, 'obtener']);
    Route::post('transaccion/limpiar.registros', [TransaccionControlador::class, 'limpiar_registros']);

});
