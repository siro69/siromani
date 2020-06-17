<?php

namespace App\Http\Middleware;

use Closure;

class CheckJobSeeker
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
        if(\Auth::user()->groups[0]->name == 'jobseekers'){
            return $next($request);
        }
        return redirect('/');

    }
}
