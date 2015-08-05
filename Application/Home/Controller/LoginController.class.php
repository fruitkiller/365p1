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
include '../Common/Constant.php';

class LoginController extends Controller
{
    public function isLogin(){
        if(!Session::is_set(SESSiON_USER_KEY) ){
            echo ReturnCode::getCode(0,"ok");
        }else{
            echo ReturnCode::getCode(1,"no");
        }
    }

    public function login(){
        $ret = UserLogic::login($_POST);
        if(0 == $ret){
            $_SESSION[SESSiON_USER_KEY] = $_POST['username'];
            echo "ok";
        }else{
            echo "err";
        }
    }
}