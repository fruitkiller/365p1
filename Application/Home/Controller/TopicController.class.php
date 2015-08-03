<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 下午1:55
 */
namespace Home\Controller;

use Home\Logic\ReplyLogic;
use Home\Logic\TopicLogic;
use Think\Controller;
use Home\Common\ReturnCode;

class TopicController extends Controller{

    public function insert(){
        if(IS_POST) {
            echo TopicLogic::insert($_POST);
        }else{
            echo ReturnCode::getCode(1,"method should be post");
        }
    }

    public function select($tid){
        echo TopicLogic::select($tid);
    }

    public function tlist($pagenum,$pagesize){
        echo TopicLogic::tlist($pagenum,$pagesize);
    }

    public function getReplay($tid,$pagenum,$pagesize){
        echo ReplyLogic::listReplaysByTid($tid,$pagenum,$pagesize);
    }
}