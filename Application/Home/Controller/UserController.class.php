<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-25
 * Time: 下午1:57
 */

namespace Home\Controller;


use Home\Logic\UserLogic;
use Think\Controller;
use Home\Common\ReturnCode;

class UserController extends BaseController
{
    public function insert(){
        if(IS_POST) {
            echo UserLogic::insert($_POST);
        }else{
            echo ReturnCode::getCode(1,"method should be post");
        }
    }
    public function select($id){
        echo UserLogic::select($id);
    }

}