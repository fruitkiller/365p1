<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 上午9:21
 */
namespace Home\Logic;


use Home\Common\ReturnCode;
use Think\Exception;

class TopicLogic
{

    public static function select($tid)
    {
        try {
            $Topic = M('Topic');
            $condition['tid'] = $tid;
            $data = $Topic->where($condition)->select();
            return ReturnCode::getCode(0, $data);
        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getTraceAsString());
        }
    }

    public static function insert($data)
    {
        try {
            $Topic = D('Topic');
            if($Topic->create($data,1)){
                $res = $Topic->add();
                if($res) {
                    return ReturnCode::getCode(0, $res);
                }else {
                    return ReturnCode::getCode(1, "err");
                }
            }
            else{
                return ReturnCode::getCode(1, $Topic->getError());
            }

        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getMessage());
        }
    }

    public static function tlist($pagenum,$pagesize){
        try {
            $User = M('Topic');
            $data = $User->limit(($pagenum - 1) * $pagesize ,$pagesize)->select();
            echo ReturnCode::getCode(0,$data);
        }catch (Exception $e){
            echo ReturnCode::getCode(1,$e->getMessage());
        }
    }
    public static function commentsAddOne($tid){
        try {
            $Topic = M('Topic');
            $condition['tid'] = $tid;
            $comments = $Topic->where($condition)->field('comments')->select();
            $data['comments'] = $comments + 1;
            $data['lastreplytime'] = time();
            $Topic->where($condition)->save($data);
        }catch (Exception $e){
            throw $e;
        }
    }




}