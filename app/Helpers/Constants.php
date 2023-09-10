<?php 
namespace App\Helpers;

class Constants {

    static public $COOKIE_SESSION = 'cookie_session';
    static public $COOKIE_EXPIRED = 50000;
    static public $TOKEN_GENERAL;
    static public $KEY_TEXT_SPEECH_GOOGLE;

    public static function inicializar()
    {
        self::$KEY_TEXT_SPEECH_GOOGLE = env('KEY_TEXT_TO_SPEECH');
        self::$TOKEN_GENERAL = env('KEY_APP_GENERAL');
    }

}

?>
