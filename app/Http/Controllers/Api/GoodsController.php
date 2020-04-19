<?php


namespace App\Http\Controllers\Api;

use App\Cart;
use App\Collect;
use App\Comment;
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
        $collect = $collect->where("user_id",$user_id)->where("goods_id",$goods_id)->first();
        if (empty($collect)){
            $add = new Collect;
            $add->user_id = $user_id;
            $add->goods_id = $goods_id;
            $add->status = $status;
            $add->save();
        }else{
            $collect = $collect->first();
            $collect->status = $status;
            $collect->save();
        }

        return new returns(200,[],'收藏成功');
    }

    public function addCart($user_id,$goods_id)
    {
        $cart = new Cart();
        if ($cart->where(['user_id'=>$user_id,'goods_id'=>$goods_id])->count() == 0){
            $cart->user_id = $user_id;
            $cart->goods_id = $goods_id;
            $cart->save();
        }

        return new returns(200,[]);
    }

    public function getComment($id)
    {
        $comment = Comment::where('goods_id',$id)->with('user')->has('user')->get();

        return new returns(200,$comment);
    }
}