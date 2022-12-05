<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class administrador
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
         switch(auth::user()->id_rol){
            case ('1'):
                return $next($request);//si es administrador continua al HOME
            break;
            case('2'):
                return redirect('estudiante');// si es un usuario normal redirige a la ruta USER
            break;  
            case ('3'):
                return redirect('auditor');//si es administrador redirige al moderador
            break;
        }
    }
}
