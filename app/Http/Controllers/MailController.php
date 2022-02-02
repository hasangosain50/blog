<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;
class MailController extends Controller
{
public function sendmail(Request $request){
    $data=Data::find($request->id);
    if($data){
        $details=[
            'title'=>'Mail from HRM',
            'body'=>'Dear '.$data->name,
            'text'=>'Hello World',
            'id'=>$data->id,
            'name'=>$data->name,
            'email'=>$data->email
            
    ];
    Mail::to($data->email)->send(new Testmail($details));
            return "mail sent";
    }
}
}
