<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsYoung
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if($localization == 'en') {
        //     abort(404);
        // } elseif($localization == 'ar') {
        //     abort(403);
        // }
        echo "ahmed";
        return $next($request);
        // dd($request->isMethod('get'));
        // if($request->age &&  $request->age < '20') {
        //     abort(404);
        // } elseif($request->age >= 20 && $request->age < 60) {
        //     return redirect()->route('user_id', ['ids' => $request->age]);
        // } else {

        //     return $next($request);
        // }
    }
}
