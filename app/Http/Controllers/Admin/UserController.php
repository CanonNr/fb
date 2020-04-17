<?php

namespace App\Http\Controllers\Admin;


use App\Address;
use App\User;

class UserController
{
    public function index()
    {
        $user_model = new User();
        $users = $user_model->get();
        return view('user/index',['users'=>$users]);
    }

    public function address($user_id)
    {
        $user = User::findOrFail($user_id);
        $address = Address::where('user_id',$user_id)->get();
        return view('user/address',['address'=>$address,'user'=>$user]);
    }

}