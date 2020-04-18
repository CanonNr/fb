<?php

namespace App\Http\Controllers\Admin;

use App\Order;

class OrderController
{
    public function index()
    {
        $orders = Order::with(['user','goods'])->has('user')->has('goods')->get();
        return view('order/index',['orders'=>$orders]);
    }

    public function fh($id)
    {
        try{
            $orders = Order::findOrFail($id);
            $orders->status = Order::配送中;
            $orders->save();
        }catch (\Exception $exception){

        }

        return redirect('/admin/order');
    }

    public function sd($id)
    {
        try{
            $orders = Order::findOrFail($id);
            $orders->status = Order::已送达;
            $orders->save();
        }catch (\Exception $exception){

        }

        return redirect('/admin/order');
    }

}