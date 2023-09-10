<?php
namespace App\Helpers;

class Text_speech {

    public static $dir_re = __DIR__."/recursos/";
    
    public static function send_text_speech ($ssml_texto){
        
        $url = Constants::$KEY_TEXT_SPEECH_GOOGLE;

        try {
            $body_request = file_get_contents(self::$dir_re . "tts_body_request.json");
            $array_body_request = json_decode($body_request, true);
            $array_body_request["input"]["ssml"] = $ssml_texto;

        } catch (\Throwable $th) {
            echo ("ERROR al decodificar");
            
        }


        $solicitud_https = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode($array_body_request),
                'ignore_errors' => true // Ignora errores HTTP para manejar la respuesta por nosotros mismos
            )
        );
        
        $context = stream_context_create($solicitud_https); // Crea un contexto para la solicitud con las opciones especificadas
        $response = file_get_contents($url, false, $context); // Realiza la solicitud HTTP POST
        
        if ($response === false) {
            // Manejar el error en caso de que la solicitud falle
            echo "Error al enviar solicitud HTTP Text_Speech";
        } else {
            // Manejar la respuesta en caso de que la solicitud sea exitosa
            $decoded_response = json_decode($response, true); // Decodifica la respuesta JSON en un array asociativo
            
        }

        $audio_code = $decoded_response["audioContent"];

        return $audio_code;
    
    }


}




?>
