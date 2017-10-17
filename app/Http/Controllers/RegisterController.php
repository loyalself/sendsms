<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 20:20
 */
namespace App\Http\Controllers;
use Validator;
class RegisterController extends Controller
{
    public function register()
    {
        $validator = Validator::make(request()->all(),
            [
                'name'=>'required|unique:users,name|min:2',
                'email'=>'required|email',
                'password'=>'required|min:2|max:10'
            ],
            [
                'name.required'=>'请输入用户名',
                'name.unique'=>'用户名已经存在',
                'email.required'=>'请输入邮箱',
                'email.email'=>'请输入正确的邮箱格式',
                'password.required'=>'请输入密码'
            ]);
        if($validator->fails())
        {
            return error(400,$validator->messages()->first());
        }
    }
}