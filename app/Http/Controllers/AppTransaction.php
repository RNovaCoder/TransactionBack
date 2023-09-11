<?php

namespace App\Http\Controllers;
use App\Helpers\Constants;
use Illuminate\Http\Request;
class AppTransaction {

    public function app_index (Request $request) {

        dd(auth('sanctum')->user()-> id, $request -> cookie(Constants::$COOKIE_SESSION));

        //Habiendo pasado el Sanctum, lógica principal..

    }

}
?>