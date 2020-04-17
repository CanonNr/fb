<?php

namespace App\Http\Controllers\Admin;


use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Base\ReturnTemplate as returns;

class LoginController extends Controller
{
    public function index()
    {
        if (!empty(session('user'))){
            return redirect('/admin');
        }

        return view('login');
    }

    public function action(Request $request)
    {
        try{
            $validateRules = [
                'username' => 'required',
                'password' => 'required',
            ];
            $this->validate($request, $validateRules);
            $data = $request->all('username','password');
            $data['password'] = md5($data['password']);
            $admin = new Admin();
            $admin = $admin->select('id','username','password')->where($data)->firstOrFail()->toArray();
            $request->session()->push('user', $admin);
            return redirect('/admin');
        }catch (\Exception $e){
            return redirect('/admin/login?msg=账号或密码错误');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }



}
