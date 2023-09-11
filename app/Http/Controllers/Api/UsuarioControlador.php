<?php

namespace App\Http\Controllers\Api;

use App\Helpers\BD;
use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class UsuarioControlador extends Controller

{
    static private function registrar ($google_user){

        $user_exist = User::where('external_id', $google_user->id)->exists();

        if ($user_exist) {
            $user = User::where("email", "=", $google_user->email)->first();    
        }

        else {
            $user = User::create([
                'name' => $google_user ->name,
                'email' => $google_user ->email,
                'avatar' => $google_user ->avatar,
                'external_id' => $google_user -> id
            ]);
        }
    
        $token = $user->createToken("auth_token")->plainTextToken;

        return $token;

    }

    public function google_login (Request $request){

        $google_user = null; 
        try {
            $google_user = Socialite::driver('google')->user();
        }
        catch (\Exception) {
            return Socialite::driver('google')->redirect();
        }

        $COOKIE_SESSION = Constants::$COOKIE_SESSION;

        //Registra al usuario si no existe y devuelve un token de autenticación
        $token = Self::registrar($google_user);

        $response = redirect()->route('index');
        $response->withCookie(cookie($COOKIE_SESSION, $token));

        return $response;

    }


    public function autenticar (){

        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->user()
        ]); 
        
    }

    public function usuario_registrar (Request $request){


        $token_app = $request ->token;

        if ($token_app !== Constants::$TOKEN_GENERAL) {
            return response()->json([
                "message" => "Error App Inválida"
            ]);
        }
        
        $user_exist = User::where('external_id', $request->id)->exists();

        if ($user_exist) {
            $user = User::where("email", "=", $request->email)->first();    
        }

        else {
            $user = User::create([
                'external_id' => $request -> id,
                'name' => $request ->name,
                'email' => $request ->email,
                'avatar' => $request ->avatar
            ]);
        }
    
        $token = $user->createToken("auth_token")->plainTextToken;

        
        return response()->json([
            "token" => $token
        ]);
  
    }


    public function cerrar_sesion (Request $request){

        auth('sanctum')->user()->currentAccessToken()->delete();
        
        return response()->json([
            "status" => 1,
            "msg" => "Sesión Cerrada",            
        ]);
        
    }

    public function cerrar_sesiones (Request $request){

        auth('sanctum')->user()->tokens()->delete();
        
        return response()->json([
            "status" => 1,
            "msg" => "Sesiones Cerradas",            
        ]);
        
    }

    public function eliminar_usuario (){

        $user = auth('sanctum')->user();
        $id_tabla = $user-> id;

        $basesDeDatos = BD::obtener_bds();
        foreach ($basesDeDatos as $bd) {
            BD::eliminar_tabla($id_tabla, $bd);
        }

        $user->tokens()->delete();
        $user->delete();

        return response()->json([
            "status" => 1,
            "msg" => "Usuario Eliminado",            
        ]);
        
    }

    
}
