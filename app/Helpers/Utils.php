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

    static public function formatDateInverse ($date) {

        $fechaOriginal = $date;
        $formatoOriginal = 'Y-m-d H:i:s';
        
        $fecha = str_replace('\\', '', $fechaOriginal);
        $fechaObjeto = Carbon::createFromFormat($formatoOriginal, $fecha);

        $formatoDestino = 'd/m/Y H:i:s';
        $fechaConvertida = $fechaObjeto->format($formatoDestino);

        return $fechaConvertida;
    }
    
    // Formato de entrada de $date -> d/m/Y H:i:s
    static function formatDateVisual($date){
        
        $meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
        
        $dia = substr ($date, 0, 2);
        $mes = substr ($date, 3, 2);
        $año = substr ($date, 6, 4);
        $hora = intval(substr ($date, 11, 2));
        $minuto = substr ($date, 14, 2);
        $indicador = "am";
        
        $mes = $meses [intval($mes)-1];    
        
        if ($hora > 11) {$indicador = "pm";}
        if ($hora == 0){$hora = 12;}
        if ($hora > 12){$hora = $hora - 12;}
    
        $fecha_final = $dia . " " . $mes . ". " . $año . " - " . $hora . ":" . $minuto . " " . $indicador;
    
        return $fecha_final;
    }

}
