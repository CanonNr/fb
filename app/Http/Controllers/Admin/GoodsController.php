<?php

namespace App\Http\Controllers\Admin;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class GoodsController
{
    public function index()
    {
        $user_model = new Goods();
        $goods = $user_model->get();
        return view('goods/index',['goods'=>$goods]);
    }

    public function create(Request $request)
    {
        return view('goods/create');
    }

    public function createAction(Request $request)
    {
        try{
            $data = $request->all('name','description','category_id','price');
            $goods = new Goods;
            $goods->name = $data['name'];
            $goods->description = $data['description'];
            $goods->category_id = $data['category_id'];
            $goods->price = round($data['price'],2);
            if ($request->hasFile('cover')){
                // 文件上传
                // 重命名文件
                $filename =  '/upload/'.time() . rand(100000,999999) . '.' . $request->file('cover')->getClientOriginalExtension();
                // 保存上传文件（获取临时文件的路径）
                Storage::disk('public') -> put($filename,file_get_contents($request->file('cover')->path()));
                $goods->cover = $filename;
            }

            $goods->save();
        }catch (\Exception $exception){
            Log::error("File Upload Error ".$exception->getMessage());
            return redirect('/admin/goods/create?msg=上传失败');
        }
        return redirect('/admin/goods');
    }

    public function delete($id)
    {
        
    }
}