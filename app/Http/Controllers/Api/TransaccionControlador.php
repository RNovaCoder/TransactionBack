<?php

namespace App\Http\Controllers\Api;

use App\Helpers\BD;
use App\Helpers\Text_speech;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaccionControlador extends Controller
{
    
    public function Registrar (Request $request) {

        //Obtener el Id del usuario Auntetificado y datos de la Request
        $id_tabla = auth('sanctum')-> user()-> id;
        $bd = $request -> tipo;

        //Si es un nuevo Modelo, crea su BD
        BD::crear_bd($bd);

        //Cambia la conexión a la BD del Modelo actual
        /*Así Schema, validaciones y demás llamadas a la clase BD
        se harán sobre la nueva BD */
        BD::cambiar_bd($bd);

        /*Verifica la existencia de la tabla del usuario para el modelo actual
        y la crea sino existe*/
        BD::crear_tabla($id_tabla, $request);

        //Internamente valida los datos y luego crea el resgitro
        $Registro = BD::crear_registro ($id_tabla, $request);
        //Guarda el registro en la tabla
        $Registro -> save();

        //Verifica si el cliente solicitó un audio para la notificación
        $audio = (isset($request->ssml)) ? 
        Text_speech::send_text_speech($request->ssml) : null;
        
        return response()->json([
            "message" => "Guardado con exito",
            "status" => 1,
            "audio" => $audio
        ]);
        
    }

    public function Resetear (Request $request) {

        //Obtener el Id del usuario Auntetificado y datos de la Request
        $id_tabla = auth('sanctum')-> user()-> id;
        $bd = $request -> tipo;

        //Si es un nuevo Modelo, crea su BD
        BD::crear_bd($bd);

        //Cambia la conexión a la BD del Modelo actual
        /*Así Schema, validaciones y demás llamadas a la clase BD
        se harán sobre la nueva BD */
        BD::cambiar_bd($bd);

        /*Verifica la existencia de la tabla del usuario para el modelo actual
        y la crea sino existe*/
        BD::crear_tabla($id_tabla, $request);

        BD::vaciar_tabla($id_tabla, $bd);

        $dataToInsert = BD::to_data_reset($request);

        BD::insertar_registros($id_tabla, $dataToInsert);

        return response()->json([
            "message" => "Datos Enviado e Insertados",
            "status" => 1,
        ]);
    
    }

    public function Obtener (Request $request){

        $id_tabla = auth('sanctum')-> user()-> id;
        $bd = $request -> tipo;
        
        //Si es un nuevo Modelo, crea su BD
        BD::crear_bd($bd);

        //Cambia la conexión a la BD del Modelo actual
        /*Así Schema, validaciones y demás llamadas a la clase BD
        se harán sobre la nueva BD */
        BD::cambiar_bd($bd);

        /*Verifica la existencia de la tabla del usuario para el modelo actual
        y la crea sino existe*/
        BD::crear_tabla($id_tabla, $request);

        $Transacciones = BD::obtener_transacciones($id_tabla);

        return response()->json($Transacciones, 200); 
    }

    /*Elimina la tabla del usuario en cada una 
    de las BD de los diferentes modelos */
    public function Limpiar_registros (){

        $id_tabla = auth('sanctum')-> user()-> id;

        $basesDeDatos = BD::obtener_bds();

        foreach ($basesDeDatos as $bd) {
            BD::eliminar_tabla($id_tabla, $bd);
        }

        return response()->json([
            "status" => 1,
            "msj" => "Registros Limpiado"
        ]);
    }


    

}
