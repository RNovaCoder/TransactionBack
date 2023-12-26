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
            $tabla->string('_id', 80)->unique();
            $tabla->decimal('monto', 10, 2);;
            $tabla->string('nombre');
            $tabla->dateTime('fecha');
            $tabla->string('fecha_visual');
        });
    }

    static public function crear_resgitro($request, $id_tabla)
    {
        //Si no pasa la validación devolverá un erro de validación 500
        Self::validar_data($request, $id_tabla);

        //Pasó la validación, creará la data
        $tabla = new Yape($id_tabla);

        $tabla->_id            = $request->transaccion_id;
        $tabla->nombre         = $request->nombre;
        $tabla->monto          = $request->monto;
        $tabla->fecha          = $request->fecha;
        $tabla->fecha_visual    = Utils::formatDateVisual(Utils::formatDateInverse($request->fecha));

        return $tabla;
    }

    static public function validar_data($request, $id_tabla)
    {

        $request->validate([
            'nombre' => 'required|string|alpha_spaces',
            'monto' => 'required|string|numeric|flotante',
            'fecha' => 'required|string|formato_fecha',
        ]);

        $id_num = intval($request->transaccion_id/1000);

        for ($i=-3; $i < 4; $i = $i + 3) {
            $id_num = $id_num + abs($i) - 2;
            $id = 'cel-' . hash('sha256', ucwords(strtolower($request->nombre)) . $request->monto . $id_num);
            $request->merge(['transaccion_id' => $id]);
            $request->validate([
                'transaccion_id' => "required|string|unique:{$id_tabla},_id"
            ]);
        }
        
    }

    static public function reset_data($request)
    {
        $cvsData = $request->csvContent;
        $filas = explode("\n", $cvsData); // Separamos las filas por salto de línea
        $datos = [];

        // Recorrer las filas y obtener los valores
        foreach ($filas as $fila) {
            $datos[] = str_getcsv($fila);
        }

        $dataToInsert = [];

        foreach ($datos as $fila) {

            if ($fila[0] == "TE PAGÓ") {

                $fecha = Utils::formatDate(end($fila));
                $nombre = ucwords(strtolower($fila[1]));
                $monto = $fila[3];
                $id = hash('sha256', $nombre . $monto . $fecha);
                $fecha_visual = Utils::formatDateVisual(end($fila));

                $dataToInsert[] = [
                    '_id' => $id,
                    'monto' => $monto,
                    'nombre' => $nombre,
                    'fecha' => $fecha,
                    'fecha_visual' => $fecha_visual
                ];
            }
        }

        return $dataToInsert;
    }

    public function __construct($table = '')
    {
        $this->table = $table;
    }

    public static function table_id_set($table)
    {
        Self::$table = $table;
    }

    public $timestamps = false;
}
