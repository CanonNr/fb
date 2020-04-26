<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsCount extends Model
{
    protected $table = 'goods_count';


    public function goods()
    {
        return $this->hasOne(Goods::class,'id','goods_id');
    }
}
