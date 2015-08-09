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

class AdminController extends BaseController
{
    public function ulist($pagenum,$pagesize){
        return UserLogic::ulist($pagenum,$pagesize);
    }
}