<?php
namespace Home\Controller;
use Home\Logic\TopicLogic;
use Think\Controller;
class IndexController extends BaseController {

    public function index(){
        $pagenum = $_GET["pagenum"];
        $pagesize = $_GET["pagesize"];
        echo TopicLogic::tlist($pagenum,$pagesize);
    }

}