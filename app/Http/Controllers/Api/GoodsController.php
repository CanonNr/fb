<?php


namespace App\Http\Controllers\Api;

use App\Goods;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Base\ReturnTemplate as returns;

class GoodsController extends Controller
{
    public function list($id)
    {
        $goods = Goods::where('category_id',$id)->get();
        return new returns(200,$goods);
    }

    public function search($name)
    {
        $goods = Goods::where('name','like','%'.$name.'%')->get();
        return new returns(200,$goods);
    }

    public function get($id)
    {
        $goods = Goods::findOrFail($id);
        return new returns(200,$goods);
    }
}