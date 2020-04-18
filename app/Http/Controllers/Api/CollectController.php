<?php


namespace App\Http\Controllers\Api;


use App\Collect;
use App\Http\Controllers\Base\ReturnTemplate as returns;

class CollectController
{
    public function list($id)
    {
        $list = Collect::where('user_id',$id)->where('status','true')->with('goods')->has('goods')->groupBy('goods_id')->get();
        return new returns(200,$list);
    }

}