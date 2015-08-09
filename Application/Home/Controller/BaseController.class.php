<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-25
 * Time: 下午1:57
 */

namespace Home\Controller;


use Home\Common\Constant;
use Think\Controller;



class BaseController extends Controller
{
    public function _initialize(){
        if(!isset($_SESSION[Constant::SESSION_USER_ID]) ||
            ! isset($_SESSION[Constant::SESSION_USER_KEY])){
            $this->redirect(Constant::WEB_URL+"login.html");
        }
    }

}