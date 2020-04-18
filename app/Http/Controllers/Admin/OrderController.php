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

    }
}