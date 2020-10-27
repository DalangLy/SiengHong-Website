<?php

namespace App\Http\Controllers;

use App\Mail\SHMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmitFormController extends Controller
{
    public function sendEmail(Request $request){
        $request->validate([
            'name' => 'required',
            //'surName' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $data = array();
        $data['login_type'] = 'Login via Form Submit';
        $data['name'] = $request->name;
        //$data['surName'] = $request->surName;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['land_or_house'] = $request->landOrHouseValue;

        Mail::to(['SaleSiengHong@gmail.com']
        )->send(new SHMail($data));

        //Mail::to('dalangly@gmail.com')->send(new SHMail($data));
        return Response()->json(['Sent']);
    }
}
