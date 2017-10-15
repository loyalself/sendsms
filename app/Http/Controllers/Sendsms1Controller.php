<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/15
 * Time: 22:56
 */
namespace App\Http\Controllers;
use App\Tool1\SendTemplateSMS;

class Sendsms1Controller extends Controller
{
    public function sendsms1()
    {
        $a = new SendTemplateSMS();
        $b = $a->sendTemplateSMS('1365686336','6666',1);
    }
}