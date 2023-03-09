<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class check
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
        $auth = Auth::user();
        if($auth){
            if ($auth->role =='admin') {
                return redirect('/daftarMitra');
            }
            elseif ($auth->role =='superadmin'){
                return redirect('/daftarAdmin');
            }
        }
        return $next($request);
    }
}
