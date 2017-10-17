<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/15
 * Time: 21:43
 */
function test()
{
    return 'hello world';
}


function success($data = [])
{
    return response()->json([
        "code" => 200,
        "status" => "success",
        "data" => $data
    ]);
}

function error($code, $message)
{
    return response()->json([
        "code" => intval($code),
        "status" => "fail",
        "message" => $message
    ]);
}