<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Helpers\BD;
use Tests\TestCase;
use App\Models\Transacciones\Yape;
use Illuminate\Support\Facades\DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        BD::cambiar_bd('Yape');
        // $yapemodel = new Yape('usertr15');
        // $response = $yapemodel
        $response = BD::ultima_transaccion('usertr15');

        //$yapemodel->where('transaccion_id', '<', 1500000000000)->delete();

        // $response = DB::table('usertr15')
        //     ->where('monto', '2.20')
        //     ->orderBy('fecha', 'desc')
        //     ->first();

        //$response  = BD::obtener_transacciones('usertr15');
        var_export($response);
    }
}
