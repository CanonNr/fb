<?php

namespace App\Http\Controllers\Admin;

use App\Categories;

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
        $data = [];
        return view('category/c',['data'=>$data]);
    }
}
