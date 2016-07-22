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
        $user = M('User');
//        var_dump($user->where('id>1')->order('date ')->select());
//        var_dump($user->select(array('where'=>array('id'=>array('neq','1')),'order'=>'id desc','limit'=>'3')));
//        var_dump($user->where('id in (1,2,3,4)') ->find( ));
//        var_dump($user->where('id = 5 ')->delete());
//        var_dump($user->select());
//        $map ['id'] = 2 ;
//        var_dump($user->where($map)->where('user="蜡笔小新"')->select());
//        var_dump($user->field('id,user')->select());

//        var_dump($user->limit(3)->select());
//                var_dump($user->limit(1,3)->select());
//        var_dump($user->page(3,2)->select());
//        var_dump($user->table('think_info')->select());
//          var_dump($user->table('__USER__')->select());
//          var_dump($user->table('__INFO__')->select());
        var_dump($user->field('a.id,a.user,b.id,b.user')->table('__USER__ a,__INFO__ b')->select());
    }


}