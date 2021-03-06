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
        {
            $orders = Order::whereIn('status',[0,1])->get();
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
