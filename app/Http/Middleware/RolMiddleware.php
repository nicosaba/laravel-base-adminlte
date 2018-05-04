<?php

namespace App\Http\Middleware;

//use App\UserPreferencias;
use Closure;
use Sentinel;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        chequeo que este logueado
//        if ($user = Sentinel::getUser()) {
//
//            // no chequeo permisos del rol SUPER
//            if ($user->inRole('superAdmin')) {
//                return $next($request);
//            } else {
//
//                if (is_null($request->session()->get('cambio_pw'))) {
//                    //El usuario tiene la  obligación de cambiar contraseña
//                    if (UserPreferencias::where(['user_id' => $user->id, 'tipo' => 'cambio_pw'])->first()) {
//
//                        if ($request->path() == 'perfilUsuario/cambioContrasena')
//                            return $next($request);
//
//                        return redirect(route('perfilUsuario.cambioContrasena'));
//
//                    }else{
//                        $request->session()->put('cambio_pw', true);//no necesita cambiar de contraseña
//                    }
//                }
//
//                //me fijo si la ruta es el HOME que es para todos
//                if ($request->path() == '/')
//                    return $next($request);
//
//                // controlo si tiene permiso a esa ruta
//                $path = explode('/', $request->path());
//                $route = (isset($path[1])) ? $path[0] . "." . $path[1] : $path[0] . ".index";
//
//                if ($user->hasAccess($route)) {
//                    return $next($request);
//                }
//                return redirect(route('notAuthorized'));
//
//            }
//        }
        return $next($request);
        return redirect('login');
    }
}
