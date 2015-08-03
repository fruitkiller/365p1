<?php

/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-25
 * Time: 下午9:43
 */
namespace Home\Common;
class ReturnCode
{
    public static function getCode($code,$message){
        $result['status']=$code;
        $result['message']=$message;
        return json_encode($result);
    }
}