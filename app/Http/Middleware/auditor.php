<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class auditor
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
                return redirect('home');//si es administrador redirige al HOME
            break;
            case('2'):
                return redirect('estudiante');/// si es un usuario normal redirige a la ruta USER
            break;  
            case ('3'):
                return $next($request);//si es moderador continua a su ruta moderador
            break;
        }
    }
}
