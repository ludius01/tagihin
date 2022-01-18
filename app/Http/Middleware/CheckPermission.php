<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckPermission
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
        // $permission = explode('|', $permission);
        // if(checkPermission($permission)){
        //     return $next($request);
        // }
        $user= Auth::user()->is_permission;
        if ($user == '1') {
                      return $next($request);
        } elseif ($user == '2') {
            return $next($request);
        }else{
        return response()->view('error.check-permission');
        }
        
        return $next($request);
    }
}
