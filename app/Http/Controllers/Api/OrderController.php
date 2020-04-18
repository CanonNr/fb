<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Base\ReturnTemplate as returns;
use App\Order;
use Illuminate\Http\Request;

class OrderController
{
    public function add(Request $request)
    {
        $data = $request->all('freight','total','user_id','name','tel','address','order_name','goods_id');
        $order = new Order();
        $order->order_id = '15'.rand(10000000,99999999);
        $order->time = time();
        foreach ($data as $key=>$item){
            $order->$key = $item;
        }
        $order->save();
        return new returns(200,$order, '下单成功');
    }

    public function get($user_id,$status)
    {
        $order = Order::where('user_id',$user_id);
        if ($status!=10){
            $order = $order->where('status',$status);
        }
        $order = $order->with('goods')->has('goods')->OrderBy('id','desc')->get();
        return new returns(200,$order);
    }

}