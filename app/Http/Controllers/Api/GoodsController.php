<?php


namespace App\Http\Controllers\Api;

use App\Collect;
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

    public function collect($user_id,$goods_id)
    {
        $collect = new Collect;
        $collect = $collect->where([
            'user_id'=>$user_id,
            'goods_id'=>$goods_id
        ])->orderBy('id','DESC')->first();
        return new returns(200,$collect);
    }

    public function collectAction($user_id,$goods_id,$status)
    {
        $collect = new Collect;
        $collect->user_id = $user_id;
        $collect->goods_id = $goods_id;
        $collect->status = $status;
        $collect->save();
        return new returns(200,[],'收藏成功');
    }
}