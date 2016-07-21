<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
//use Think\Model;

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
        $user = new UserModel();
        var_dump($user->select());
    }
}