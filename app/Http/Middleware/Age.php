<?php

namespace App\Http\Middleware;

use Closure;

class Age
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
        // age = variabel
        if ($request->age < 17 ) {
            return redirect('/fail');
        }

        // jika benar maka akan dilanjutkan ($next)
        return $next($request);
    }
}
