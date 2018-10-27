<?php

namespace App\Http\Middleware;

use Closure;
use Google\Cloud\Storage\StorageClient;


class InitAuthen
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
        try{
//        dd($storage);
            return $next($request);
        }catch (\Exception $e){
            abort(404);
        }

    }
}
