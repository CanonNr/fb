<?php


namespace App\Http\Controllers\Api;


use App\Address;
use App\Http\Controllers\Base\ReturnTemplate as returns;
use Illuminate\Http\Request;

class AdressController
{
    public function get($id)
    {
        $address = Address::where('user_id',$id)->get();
        return new returns(200,$address);
    }


    public function add(Request $request)
    {
       $data = $request->all('name','tel','isDefault','address','label','user_id');
       if ($data['isDefault'] == 'true'){
           $a = Address::where('user_id',$data['user_id'])->where('is_default','true')->first();
           $a->is_default = 'false';
           $a->save();
       }
       $address = new Address();
       $address->user_id = $data['user_id'];
       $address->name = $data['name'];
       $address->tel = $data['tel'];
       $address->is_default = $data['isDefault'];
       $address->address = $data['label'].' '.$data['address'];
       $address->save();
       return new returns(200,$address);
    }

    public function getDefault($id)
    {
        $address = Address::where('user_id',$id)->where('is_default','true')->first();
        return new returns(200,$address);
    }
}