<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 15-7-26
 * Time: 上午9:06
 */
namespace Home\Model;
use Think\Model;

class TopicModel extends Model{

    protected $_validate=array(
        array('uid','require','uid not empty'),
        array('title','require','title not empty'),
        array('content','require','content not empty'),
    );

    protected  $_auto=array(
        array('posttime','time',1,'function'),
        array('lasttime','time',3,'function'),
    );
}