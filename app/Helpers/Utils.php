<?php
namespace App\Helpers;
use Carbon\Carbon;

class Utils {

    static public function formatDate ($date) {

        $fechaOriginal = $date;
        $formatoOriginal = 'd/m/Y H:i:s';

        $fecha = str_replace('\\', '', $fechaOriginal);
        $fechaObjeto = Carbon::createFromFormat($formatoOriginal, $fecha);

        $formatoDestino = 'Y-m-d H:i:s';
        $fechaConvertida = $fechaObjeto->format($formatoDestino);

        return $fechaConvertida;
    }

}


?>
