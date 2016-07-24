<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: 28395
 * Date: 2016/7/21
 * Time: 20:50
 */
class UserModel extends Model
{
    protected $_auto = array(
//        array('count','1'), //array('count','1',3,)
//        array('user','sha1',3,'function'),
//        array('user','email',3,'field'),
//                array('user','addPrefix',3,'callback','_'),
        array('user','',2,'ignore'),
    );
    protected function addPrefix($str , $prefix){
        return $prefix.$str;
    }
}

