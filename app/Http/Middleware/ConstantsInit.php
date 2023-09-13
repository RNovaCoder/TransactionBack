<?php
namespace App\Http\Middleware;

use Closure;
use App\Helpers\Constants;

class ConstantsInit
{
    public function handle($request, Closure $next)
    {
        Constants::inicializar();
        return $next($request);
    }
}
