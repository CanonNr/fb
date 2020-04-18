<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    public function goods()
    {
        return $this->hasOne(Goods::class,'id','goods_id');
    }

}
