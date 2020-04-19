<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Base\ReturnTemplate;
use App\Order;
use Closure;

class User
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

        {
            $orders = Order::whereIn('status',[0,1,2])->get();
            foreach ($orders as $key=>$value){
                if((time() - $value->time) > 1800){

                    $value->status +=1;
                    $value->time = time();
                    $value->save();
                }
            }
        }
        return $next($request);
    }
}
