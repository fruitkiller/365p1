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
        array('tid','require','not empty'),
        array('uid','email','uid shoud not empty'),
        array('content','email','uid shoud not empty'),
    );

    protected  $_auto=array(
        array('posttime','time',1,'function'),
    );
}