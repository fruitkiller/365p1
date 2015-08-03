<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 下午1:41
 */
namespace Home\Common;

class Passwd{
    public static function getPwdCode($pwd)
    {
        $mpw=md5($pwd);
        $okpw=substr($mpw,5,20);
        return $okpw;
    }
}