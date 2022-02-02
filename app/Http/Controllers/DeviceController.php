<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function list($id=null)
    {
        return $id?Device::find($id):Device::all();
    }
    public function add(Request $req)
    {
        $device= new Device; 
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){
        return ["Result"=>"result have been saved"];
    }
    else{
        return ["Result"=>"operation failed"];
    }
}
public function update(Request $req)
{
    $device= Device::find($req->id);
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result= $device->save();
    if($result){
return["Result"=>"result have been updated"];
}
else{
    return["Result"=>"operation failed"];
}
    }
    public function delete($id)
    {
        $device= Device::find($id);
        $result= $device->delete();
        if($result){
            return["Result"=>"result have been deleted"];
        }
        else{
            return["Result"=>"operation failed"];
        }
    }

    public function search($name){
        return Device::where("name","like","%".$name."%")->get();
    }
}
