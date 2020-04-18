<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Base\ReturnTemplate as returns;
use App\Order;
use Illuminate\Http\Request;

class OrderController
{
    public function add(Request $request)
    {
        //http://192.168.2.222:888/api/order/add?goods_id=895-898&freight=2.00&total=6.00&userid=17&name=1231231&tel=23123123&address=undefined%E5%8C%97%E4%BA%AC%E5%B8%82-%E5%B8%82%E8%BE%96%E5%8C%BA-%E8%A5%BF%E5%9F%8E%E5%8C%BA%2023123&order=%E9%A6%92%E5%A4%B4%20%20%E7%B1%B3%E9%A5%AD%20%20&token=3678d4474bd96e11fa435a84281bef2b
        $data = $request->all('freight','total','user_id','name','tel','address','order_name');
        $order = new Order();
        $order->order_id = '15'.rand(10000000,99999999);
        foreach ($data as $key=>$item){
            $order->$key = $item;
        }
        $order->save();
        return new returns(200,$order, '下单成功');
    }

}