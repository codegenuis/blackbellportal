<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateUser
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
        $user = json_decode(session('user'));
        if($user != '' || $user != NULL){
            return $next($request);
        }
        else {
            return redirect('/dealers/login');
        }
    }
}
