<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if(Auth::check()){
        if(auth()->user()->type==1){
            return $next($request);
        }else{
        return redirect('/backend/admin')->with('error',"You don't have access admin");
        }
    }else
    {
        return redirect('login')->with('error',"You don't have access admin");
    }
    return $next($request);
}
}
