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
        $user = M('User');
//        $data['user']='李彦辉';
//        $data['email']='yanhui@163.com';
//        $data['date']=date('Y-m-d H:i:s');
//        $user->add($data);

//        $user = M('User');
//       $data = $user -> create();
//        $data['date'] = date('Y-m-d H:i:s');
        $data = 'user=星矢&email=xinshi@qq.com&date='.date('Y-m-d H:i:s');
        $user->data($data) ->add();
    }
}