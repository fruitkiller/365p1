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

class UserLogic
{

    public static function select($id)
    {
        try {
            $User = M('User');
            $data = $User->find($id);
            return ReturnCode::getCode(0, $data);
        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getMessage());
        }
    }

    public static function insert($data)
    {
        if ($data['signature'] == null || $data['signature'] =="")
        {
            $data['signature'] = $data['username'];
        }
        $pwd = Passwd::getPwdCode($data['password']);
        $data['password'] = $pwd;
        try {
            $User = D('User');
            if($User->create($data,1)){
                $res = $User->add();
                if($res) {
                    return ReturnCode::getCode(0, $res);
                }else {
                    return ReturnCode::getCode(1, "err");
                }
            }
            else{
                return ReturnCode::getCode(1, $User->getError());
            }

        } catch (Exception $e) {
            return ReturnCode::getCode(1, $e->getMessage());
        }
    }

    public static function ulist($pagenum,$pagesize){
        try {
            $User = M('User');
            $data = $User->limit(($pagenum - 1) * $pagesize ,$pagesize)->select();
            echo ReturnCode::getCode(0,$data);
        }catch (Exception $e){
            echo ReturnCode::getCode(1,$e->getMessage());
        }
    }

}