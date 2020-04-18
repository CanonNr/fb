<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    const 未发货 = 0;
    const 配送中 = 1;
    const 已送达 = 2;
    const 已完成 = 3;

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function goods()
    {
        return $this->hasOne(Goods::class,'id','goods_id');
    }
}
