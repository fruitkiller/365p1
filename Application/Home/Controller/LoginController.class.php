<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-8-4
 * Time: 上午7:17
 */


namespace Home\Controller;

use Home\Common\ReturnCode;
use Think\Controller;
include '../Common/Constant.php';

class LoginController extends Controller
{
    public function isLogin(){
        if(!Session::is_set(SESSiON_USER_KEY)){
            echo ReturnCode::getCode(0,"ok");
        }else{
            echo ReturnCode::getCode(1,"no");
        }
    }

    public function login(){
        if(!Session::is_set(SESSiON_USER_ID)){
            echo ReturnCode::getCode(0,"ok");
        }else{
            echo ReturnCode::getCode(1,"no");
        }
    }
}