<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match('/^[\pL\s\.\-]+$/u', $value);
        });
        
        Validator::replacer('alpha_spaces', function ($message, $attribute, $rule, $parameters) {
            return 'El campo nombre sólo debe contener letras, guiones, puntos y espacios.';
        });

        Validator::extend('formato_fecha', function ($attribute, $value) {
            $rsult = Carbon::hasFormat($value, 'Y-m-d H:i:s');
            return $rsult;
        });

        Validator::replacer('formato_fecha', function ($message, $attribute) {
            return 'El formato de la fecha debe ser: Y-m-d H:i:s';
        });

        Validator::extend('flotante', function ($attribute, $value) {
            $number_parts = explode('.', $value);

            // Si el valor no tiene punto decimal, validar que sea un número entero de máximo 8 dígitos.
            if (count($number_parts) == 1) {
                return preg_match('/^\d{1,8}$/', $value);
            }

            // Si el valor tiene punto decimal, validar que tenga máximo dos decimales y que el último decimal sea cero.
            if (count($number_parts) == 2) {
                      
                return  preg_match('/^\d{1,8}\.\d{2}$/', $value);
            }

            // Si el valor tiene más de un punto decimal, no es válido.
            return false;
            
        });

        Validator::replacer('flotante', function ($message, $attribute, $rule, $parameters) {
            return 'Ingresa un monto válido';
        });
    }
}
