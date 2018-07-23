<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class PerfilMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->id_perfil==1){            
          return $next($request);
        }else{

            return response('Unauthorized.', 401);
            //dd('No Tienes un perfil autorizado');
        }

          //return redirect('login');  
    }
}
