<?php

namespace App\Http\Controllers\Admin;


use App\User;

class UserController
{
    public function index()
    {
        $user_model = new User();
        $users = $user_model->get();
        return view('user/index',$users);
    }

}