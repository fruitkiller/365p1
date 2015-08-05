<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-25
 * Time: 下午1:57
 */

namespace Home\Controller;


use Think\Controller;
include '../Common/Constant.php';


class BaseController extends Controller
{
    public function _initialize(){
        if(!session('?'+SESSiON_USER_ID)){
            $this->error("not login");
        }
    }
}