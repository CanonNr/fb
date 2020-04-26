<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\GoodsCount;

class CategoryController
{
    public function index()
    {
        $data = Categories::get();
        return view('category/index',['data'=>$data]);
    }

    /**
     * @param $id int 分类id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function c($id)
    {
        $goods = [];
        $total = [];
        $order_count = GoodsCount::select('*',\DB::raw('count(*) as total'))->where('time',date('Y-m',time()))->where('category_id',$id)->with('goods')->has('goods')->groupBy('goods_id')->get()->toArray();

        foreach ($order_count as $item){
            $goods[] = $item['goods']['name'];
            $total[] = $item['total'];
        }
        return view('category/c',['goods'=>$goods,'total'=>$total]);
    }
}
