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
   }

    public function create(){
        $user = D('User');
//        $data['user']='樱桃小丸子';
//        $data['email']= 'wanzi@163.com';

//        $data['user']=$_POST['user'];
//        $data['email']=$_POST['email'];
//        $data['date']=date('Y-m-d H:i:s');
//        $data =  new \stdClass();
//        $data -> user = $_POST['user'];
//        $data -> email = $_POST['email'];
//        $data-> date = date('Y-m-d H:i:s');

//        var_dump($user->create($_POST,Model::MODEL_INSERT));
//            var_dump($user->field('user')->create());
        var_dump($user->create());
    }
    public function add(){
        /*
        $user = D('User');
        $data['id'] = '17';
        $data['user'] = '你芳芳';
        $data['email']='';
        if($user->create($data)){
//            $user->add();
            $user->save();

        } */
        $rules = array(
            array('user','md5',3,'function'),
        );
        $user = M('User');
        $data['user'] = '你芳芳';
        if($user->auto($rules)->create($data)){
            $user->add();
    }}
}