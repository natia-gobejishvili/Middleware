<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckName
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
        if($request->input("my_super_middleware")) {
            $name = $request->input('name');
            $my_super_middleware = $request->input("my_super_middleware");
            $ChekName = $name;
            if($ChekName == $my_super_middleware){
                return $next($request);
            } else {
                return redirect("error");
            }
        }
        return redirect("/");
    }
}
