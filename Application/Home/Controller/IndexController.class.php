<?php
namespace Home\Controller;
use Home\Common\ReturnCode;
use Home\Logic\UserLogic;
use Think\Controller;
class IndexController extends Controller {

    public function login(){
        $ret = UserLogic::login($_POST);
        if(0 == $ret){
            $_SESSION[SESSiON_USER_KEY] = $_POST['username'];
            echo ReturnCode::getCode(0,"");
        }else{
            echo ReturnCode::getCode(1,"");
        }
    }

}