<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all('username','password');
        if (empty($data['username']) || empty($data['password'])){
            // 返回error
            return 'error';
        }
        $user = new User;

        if (!empty($user->where('username',$data['username'])->first())){
            return  "已存在";
        }

        $user->username = $data['username'];
        $user->password = md5($data['password']);
        if ($user->save()){
            return 123;
        }

    }
}
