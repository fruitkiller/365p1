<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-8-4
 * Time: 上午7:17
 */


namespace Home\Controller;

use Home\Common\ReturnCode;
use Home\Logic\UserLogic;
use Think\Controller;

use Think\Log;
use Home\Common\Constant;

class LoginController extends Controller
{
    public function isLogin(){
        if(!isset($_SESSION[Constant::SESSION_USER_ID]) ||
            ! isset($_SESSION[Constant::SESSION_USER_KEY])){
            echo ReturnCode::getCode(0,"ok");
        }else{
            echo ReturnCode::getCode(1,"no");
        }
    }

    public function login(){
        $res = UserLogic::login($_POST);
        $user = json_decode($res);
        //Log::record($user->status);
        if(0 == $user->status){
            $_SESSION[Constant::SESSION_USER_ID] = $user->message;
            $_SESSION[Constant::SESSION_USER_KEY] = $_POST['username'];
            echo ReturnCode::getCode(0,$res);
        }else{
            echo ReturnCode::getCode(1,"err");
        }
    }
}