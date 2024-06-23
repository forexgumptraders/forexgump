<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Article;

class EnsureUserIsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtener el article desde la URL usando el modelo de enlace implícito
        $article = $request->route('article');
    
        // Verificar si se encontró el artículo y obtener el valor del campo 'modo'
        $modo = $article ? $article->modo : null;
    
        if ($modo === 'free') {
            // Alerta gratuita, no es necesario verificar la suscripción
            return $next($request);
        }
    
        // Si es "plus", verificar la suscripción
        if (!$request->user()->subscribed('señales')) {
            // Este usuario no tiene una suscripción activa...
            return redirect('billing');
        }
    
        return $next($request);
    }
    

    //        // Si es "plus", verificar la suscripción
    //     if ($request->user() && !$request->user()->subscribed('señales')) {
    //         // Este usuario no tiene una suscripción activa...
    //         return redirect('billing');
    //     }
    
    //     return $next($request);
    // }
    
}
