<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Http\Controllers\Base\ReturnTemplate as returns;

class CartController
{
    public function list($id)
    {
        $cart = Cart::where('user_id',$id)->with('goods')->has('goods')->groupBy('goods_id')->get();
        return new returns(200,$cart);
    }

    public function delete($id,$goods_id)
    {
        $cart = Cart::findOrFail($goods_id);
        $cart->delete();
        return new returns(200,$cart);
    }
}