<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Base\ReturnTemplate as returns;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        try {

            $data = $request->all('username', 'password');
            if (empty($data['username']) || empty($data['password'])) {
                // 返回error
                return new returns(422, [], '请求参数错误');
            }
            $data['password'] = md5($data['password']);

            $user = new User;
            $user = $user->select('id', 'username', 'password')->where($data)->first();


            if (empty($user)) {
                return new returns(422, [], '账号或密码错误');
            }

            $user->token = md5("clearlove7");

            return new returns(200, $user, '登录成功');

        }catch (\Exception $exception){
            return new returns(422, [], '账号或密码错误');
        }
    }


    public function register(Request $request)
    {
        try {
            $data = $request->all('username','password');
            if (empty($data['username']) || empty($data['password'])){
                // 返回error
                return new returns(422,[],'请求参数错误');
            }

            $user = new User;
            if (!empty($user->where('username',$data['username'])->first())){
                return new returns(422,[],'该用户已存在');
            }

            $user->username = $data['username'];
            $user->password = md5($data['password']);
            if ($user->save()){
                return new returns(200,[],'注册成功');
            }

            return new returns(422,[],'操作失败');
        }catch (\Exception $exception){
            return new returns(422, [], '账号或密码错误');
        }
    }
}
