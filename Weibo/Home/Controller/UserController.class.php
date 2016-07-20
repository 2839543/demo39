<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    echo 'user index';
    }
    public function test($user,$pass){
        echo 'user:'.$user.'<br/>pass:'.$pass;
    }
}