<?php

namespace App\Http\Middleware;

use Closure;

class Starter
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
        if (\Auth::user()->hasAnyRole(['JobSeeker', 'Employer'])) {
            return $next($request);
        }
        return redirect()->route('dashboard.index');
    }
}
