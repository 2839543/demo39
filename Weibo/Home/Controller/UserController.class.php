<?php
namespace Home\Controller;
//use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function index(){
    echo 'user index';
    }
    public function test($user,$pass){
        echo 'user:'.$user.'<br/>pass:'.$pass;
    }
    public function model(){

//        $user = D('User');
//        $user = new Model('User','think_','mysql://richie:richie@localhost/thinkphp');
//        $user = M('User');
//        var_dump($user->select());
//        $user = new UserModel();
//        var_dump($user->select());
        $user = M('User');
//        $condition['id']=1;
//        $condition['user']='蜡笔小新';
//        var_dump($user->where($condition) ->select());
        //使用对象的方式进行查询
//        $condition = new \stdClass();
//        $condition->id = 1;
//        $condition->user = '蜡笔小新';
//        $condition->_logic='OR';
//        var_dump($user->where($condition)->select());
//        $user = M('User');
//        $map['id'] = array('eq','1');
//         $map['id'] = array('neq','1');
//        $map['id']=array('gt','2');
//        $map['user'] = array('neq','大蛇丸');
//         var_dump($user->where($map)->select());

        $user = M('User');
//        $map['user&email']= 'xiaoxin@123.com';
//        $map['id']= array('eq',1);
//        $where['id']=2;
//        $map['_complex']=$where;
//        $map['_logic']='or';
//        var_dump($user->where($map)->select());
//        var_dump($user->count());
//        var_dump($user->count('email'));  //不计算空值
//var_dump($user->max(id));
//        var_dump($user->min('id'));
//        var_dump($user->avg('id'));
//        var_dump($user->sum('id'));

//        var_dump($user->getByUser('樱桃小丸子'));
//var_dump($user->getFieldByUser('路飞','email')); //根据条件查询指定字段的值
//    var_dump($user->query("SELECT email FROM think_user"));
//        var_dump($user->execute("update think_user set email = 'daxin@189.com' where id = 1 ")) ;
    }
}