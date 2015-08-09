<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 上午9:06
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model{

    protected $_validate=array(
        array('username','require','用户名不为空'),
        //array('email','email','email shoud not empty'),
        array('password','require','passwd not empty'),
    );

    protected  $_auto=array(
        array('regtime','time',1,'function'),
        array('lasttime','time',3,'function'),
        //array('qqid','null',1),
    );
}