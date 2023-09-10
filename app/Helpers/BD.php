<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class BD {

    static private $pre_bd = "app_tr_";
    static private $pre_tabla = "usertr";

    /*Variable para acceder a los modelos 
    sin tener que crear una factoría*/
    static private $models_spacename = "App\\Models\\Transacciones\\";

    static public function crear_bd ($bd) {

        /*Comprueba que Bd se corresponda con un Model
        y luego crea su Bd*/
        $bd = Self::bd_format($bd);
        DB::statement("CREATE DATABASE IF NOT EXISTS $bd");
    }

    static public function eliminar_tabla ($id_tabla, $bd){
        $bd = Self::bd_format($bd);
        $id_tabla = Self::tabla_format($id_tabla);
        echo (var_dump("DROP TABLE IF EXISTS $bd.$id_tabla"));
        DB::statement("DROP TABLE IF EXISTS $bd.$id_tabla");
    }

    static public function vaciar_tabla ($id_tabla, $bd){
        $bd = Self::bd_format($bd);
        $id_tabla = Self::tabla_format($id_tabla);
        DB::statement("TRUNCATE TABLE $bd.$id_tabla");
    }

    static public function obtener_bds (){

        $filtro = Self::$pre_bd . "%";
        $sql = "SELECT schema_name AS database_name FROM information_schema.SCHEMATA WHERE schema_name LIKE ?";
        // Ejecutar la consulta con el filtro
        $basesDeDatos = DB::select($sql, [$filtro]);

        $basesDeDatosArray = [];
        foreach ($basesDeDatos as $baseDatos) {
            $basesDeDatosArray[] = $baseDatos->database_name;
        }

        return $basesDeDatosArray;
    }

    static public function cambiar_bd ($bd){

        $bd = Self::bd_format($bd);
        config()->set('database.connections.mysql.database', $bd);
        DB::reconnect();
        DB::setDatabaseName($bd);
    
    }
    
    static public function obtener_transacciones ($id){

        $id_tabla = Self::tabla_format($id);
        return DB::table($id_tabla)->orderBy('fecha', 'desc')->get();

    }

    static public function crear_tabla ($id_tabla, $resquest){

        $model = Self::$models_spacename . $resquest -> tipo; 
        $id_tabla = Self::tabla_format($id_tabla);

        if (!(Schema::hasTable($id_tabla))){
            $model::crear_tabla ($id_tabla);
        };

    }

    static public function crear_registro ($id_tabla, $resquest){

        $model = Self::$models_spacename . $resquest -> tipo; 
        $id_tabla = Self::tabla_format($id_tabla);
        
        return $model::crear_resgitro ($resquest, $id_tabla);

    }

    static public function insertar_registros ($id_tabla, $dataToInsert){

        $id_tabla = Self::tabla_format($id_tabla);
        DB::table($id_tabla)->insert($dataToInsert);
    }


    static private function bd_format ($bd){

        if (stripos($bd, Self::$pre_bd) === false) {
            $bd = Self::$pre_bd . $bd;
        } 
        return $bd;
    } 

    static private function tabla_format ($id_tabla){

        if (stripos($id_tabla, Self::$pre_tabla) === false) {
            $id_tabla = Self::$pre_tabla . $id_tabla;
        } 
        return $id_tabla;
    }

    static public function to_data_reset (Request $resquest) {
        $bd = $resquest -> tipo;
        $model = Self::$models_spacename . $bd;
        return $model::reset_data($resquest);
    }

}




?>
