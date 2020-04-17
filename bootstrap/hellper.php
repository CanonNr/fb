<?php

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
