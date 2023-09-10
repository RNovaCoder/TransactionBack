<?php

namespace App\Models\Transacciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\Helpers\Utils;


class Yape extends Model
{
    use HasFactory;

    protected $table;

    static public $bd_name = 'yape';

    static public function crear_tabla($id_tabla)
    {

        Schema::create($id_tabla, function ($tabla) {
            $tabla->bigIncrements('_id');
            $tabla->bigInteger('transaccion_id');
            $tabla->decimal('monto', 10, 2);;
            $tabla->string('nombre');
            $tabla->dateTime('fecha');
            $tabla->string('mensaje')->nullable();;
        });
    }



    static public function crear_resgitro($request, $id_tabla)
    {

        //Si no pasa la validación devolverá un erro de validación 500
        Self::validar_data($request, $id_tabla);

        //Pasó la validación, creará la data
        $tabla = new Yape($id_tabla);
        $tabla->transaccion_id = $request->transaccion_id;
        $tabla->nombre         = $request->nombre;
        $tabla->monto          = $request->monto;
        $tabla->fecha          = $request->fecha;
        $tabla->mensaje        = $request->mensaje ?? null;

        return $tabla;
    }

    static public function validar_data($request, $id_tabla)
    {

        $request->validate([
            'transaccion_id' => "required|numeric|unique:{$id_tabla},transaccion_id",
            'nombre' => 'required|string|alpha_spaces',
            'monto' => 'required|string|numeric|flotante',
            'fecha' => 'required|string|formato_fecha',
        ]);
    }

    static public function reset_data($request)
    {

        $cvsData = $request->getContent();
        $filas = explode("\\n", $cvsData); // Separamos las filas por salto de línea
        $datos = [];

        // Recorrer las filas y obtener los valores
        foreach ($filas as $fila) {
            $datos[] = str_getcsv($fila);
        }

        $dataToInsert = [];
        $count = 0;
        foreach ($datos as $fila) {

            if ($fila[0] == "TE PAGÓ") {

                $fecha = Utils::formatDate(end($fila));
                $nombre = ucwords(strtolower($fila[1]));
                $monto = $fila[3];
                $id = $count;
                $mensaje = null;

                $dataToInsert[] = [
                    'transaccion_id' => $id,
                    'monto' => $monto,
                    'nombre' => $nombre,
                    'fecha' => $fecha,
                    'mensaje' => $mensaje
                ];

                $count = $count + 1;
            }
        }

        return $dataToInsert;
    }

    public function __construct($table)
    {
        $this->table = $table;
    }


    public $timestamps = false;
}
