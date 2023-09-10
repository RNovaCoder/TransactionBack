<?php

namespace App\Http\Middleware;

use App\Helpers\Constants;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CookieAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie(Constants::$COOKIE_SESSION);

        if ($token) {
            $request->headers->set('Authorization', 'Bearer ' . $token);
        }

        if (Auth::guard('sanctum')->guest()) {
            return Redirect::route('login');
        }

        return $next($request);    
    }
}
