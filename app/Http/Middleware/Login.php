<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Base\ReturnTemplate;
use Closure;

class Login
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
        $token = $request->get('token');
        if (!isset($token) && empty($token)){
            return new ReturnTemplate(422,[],'请先登录');
        }
        return $next($request);
    }
}
