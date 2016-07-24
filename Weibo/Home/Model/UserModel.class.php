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
    protected $_validate = array(
//        array('user','require','用户名不得为空！','0','regex'),
//        array('user','email','邮箱格式不正确！'),
//        array('user','url','URL格式不正确！'),
//        array('user','currency','货币格式不正确！'),
//                array('user','number','数字格式不正确！'),
//                array('user','english','必须是英文！'),
//                array('user','/^\d{3,6}$/','3到6位纯数字！','0','regex'),
//                array('user','小明','两个值不相等！','0','notequal'),
//        array('user','name','两个值不相等！','0','confirm'),
                array('email','checkLength','邮箱必须要3-6位之间！','0','callback',3,array(3,6)),
//        array('user','checkLength','用户名必须要3-6位之间！','0','callback',3,array(3,16)),
        array('user','checkLength','用户名必须要3-6位之间！','0','function',3,array(3,6)),
    );

    protected function  checkLength($str,$min,$max){
        preg_match_all('/./u',$str,$matches);
        $len=count($matches[0]);
        if($len < $min || $len > $max){
            return false;
        }else{
            return true;
        }

    }
}

