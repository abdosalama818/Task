<?php

namespace App\Http\Middleware;

use App\Models\Examination_prices;
use Closure;
use Illuminate\Http\Request;

class Isbookanapoinment
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
        //tabel  examination_name
        // model Examination_prices
        $count = Examination_prices::count();
        if($count != 0){

            return $next($request);

        }
        
        return back();

    }
}
