<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Grawe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $osig)
    {
        $kojeOsig = 2;

        if ($osig != $kojeOsig)
        {
            return redirect()->route('/osiguranje/home');
        }

        return $next($request);
    }
}
