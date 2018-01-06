<?php

namespace App\Http\Middleware;

namespace App\Http\Controllers\Auth;
use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     if(Auth::check())
    //     {
    //         return $next($request);
    //     }
    //     else{
    //         return redirect('admin/login');
    //     }
    // }
}
