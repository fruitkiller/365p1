<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $Data = M('user');// 实例化Data数据模型
        $result = $Data->find(1);
        $res=json_encode($result);
        echo $res;
    }

}