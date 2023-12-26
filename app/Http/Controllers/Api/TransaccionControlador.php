<?php

namespace App\Http\Controllers\Api;

use App\Helpers\BD;
use App\Helpers\Text_speech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

        $error = "";
        $code = 0;
        DB::beginTransaction();

        try {
            //$ultima_trans = BD::ultima_transaccion($id_tabla);
            $dataToInsert = BD::to_data_reset($request);
            if (count($dataToInsert) > 0) {
                BD::eliminar_data_not($id_tabla);
                BD::insertar_registros($id_tabla, $dataToInsert);
                $message = "Datos actualizados correctamente";
                $code = 1;
            }
            else {
                $message = "Datos envíados vacíos, con formato erróneo o repetidos";
            }
            DB::commit();
        }
        catch (\Exception $e) {
            DB::rollback();
            $error = $e -> getMessage();
            $message = "CSV Inválido, revisa el formato";
        }
        
        return response()->json([
            "message" => $message,
            "status" => $code,
            'error' => $error
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

        //Si no envía una cantidad de meses explícito será 5 meses por default
        $meses = $request->input('meses');
        $Transacciones = BD::obtener_transacciones($id_tabla, $meses);

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
