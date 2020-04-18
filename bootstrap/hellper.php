<?php

use App\Order;

function category($id){
    switch ($id){
        case 1:
            return '主食';
        case 2:
            return '酒水';
        case 3:
            return '盖浇饭';
        case 4:
            return '菜';
        default:
            return '其他';
    }
}

function getOrderStatus($status){
    switch ($status){
        case Order::未发货:
            return '未发货';
        case Order::配送中:
            return '配送中';
        case Order::已送达:
            return '已送达';
        case Order::已完成:
            return '已完成';
        default:
            return '已完成';
    }
}
