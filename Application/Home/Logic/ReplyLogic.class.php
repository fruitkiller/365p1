<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 上午9:21
 */
namespace Home\Logic;

use Home\Common\Passwd;
use Home\Common\ReturnCode;
use Think\Exception;

class ReplyLogic
{

    public static function select($pid)
    {
        try {
            $Reply = M('Reply');
            $data = $Reply->find($pid);
            return ReturnCode::getCode(0, $data);
        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getMessage());
        }
    }

    public static function insert($data)
    {
        if ($data['client'] == null || $data['client'] =="")
        {
            $data['client'] = "null";
        }
        try {
            $Reply = D('Reply');
            if($Reply->create($data,1)){
                $res = $Reply->add();
                if($res) {
                    TopicLogic::commentsAddOne($data['tid']);
                    return ReturnCode::getCode(0, $res);
                }else {
                    return ReturnCode::getCode(1, "err");
                }
            }
            else{
                return ReturnCode::getCode(1, $Reply->getError());
            }

        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getMessage());
        }
    }

}