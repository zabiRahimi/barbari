<?php

namespace App\Http\Middleware;

use Closure;

class ChekLoginDriver
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

      $session=  $request->session()->get('session_driver');
      $session_id=$request->session()->getId();

      if (isset($session)&& $session==$session_id){

        return $next($request);
      }
      return redirect('/');
    }
}
