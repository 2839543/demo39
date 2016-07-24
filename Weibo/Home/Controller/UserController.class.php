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
//        $user = D('User');
//        $data ['user']='用户';
//        $data['email']='小明啊啊';
////        $data ['user']='';
//        if($user->create($data)){
//            echo '所有字段验证成功';
//        }else{
////            var_dump($user->getError());
//            $this->ajaxReturn($user->getError());
//        }
        $rules = array(
            array('user','require','用户名不得为空'),
        );
        $user = M('User');
        $data['user']='';
        if($user->validate($rules)->create($data)){
            echo '所有字段验证成功';
        }else{
            var_dump($user->getError());
        }
    }
}