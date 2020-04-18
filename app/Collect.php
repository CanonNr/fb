<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    protected $table = 'collects';

    public function goods()
    {
        return $this->hasOne(Goods::class,'id','goods_id');
    }
}
