<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarPagoAureum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->aureum === 'activo') {
            return $next($request); // El usuario tiene un pago válido, permite el acceso.
        }
    
        // El usuario no ha realizado un pago válido, puedes redirigirlo o realizar otras acciones.
        return redirect()->route('robot.aureumIndex');
    }
}
