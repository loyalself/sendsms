<?php

namespace App\Http\Controllers;

use App\Tool\SendTemplateSMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SendsmsController extends Controller
{
    //
    public function sendsms()
    {
        $validate = Validator::make(request()->all(),
            [
                'phone'=>'required|regex:/^1[34578][0-9]{9}$/',
            ],
            [
                'phone.required'=>'电话号码不能为空',
                'phone.regex'=>'电话号码格式不正确'
            ]);
        if($validate->fails())
        {
            return error(400,$validate->messages()->first());
        }
       $sendtemplatesms = new SendTemplateSMS();
       $result = $sendtemplatesms->sendTemplateSMS(request('phone'),'1000',1);
       //return $result;
        //获取$result这个对象中的code码
        //dd($result->getData()->code);
        if($result->getData()->code == 200)
        {
            echo '我成功了';
        }else
        {
            return '我失败了';
        }
    }


}
