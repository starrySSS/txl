<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function __construct(){
		parent::__construct();
	}
    public function login(){
    	if (IS_POST) {
            $username = I("post.username");
            $userpwd = I("post.password");
            $map['tel'] = $username;
            $map['password'] = $userpwd;
            $map['status'] = array('gt',1);
            $data = M('user')->where($map)->find();  
            if($data){
                $login_success['id'] = $data['id'];
                $login_success['username'] = $data['username'];
                $login_success['status'] = $data['status'];
                $_SESSION['adminuser'] = $login_success;
                $this->success("登陆成功",U("index/index"));die;
            }else{
                $this -> error('用户名或密码错误');
            }
        }
        $this->display();
    }
    public function logout(){
    	$_SESSION['adminuser'] = null;
        session_unset();
        session_destroy();
        $this->success('退出成功','login');
    }
    public function imgVerify(){
        $config = array(
            'length' => 3,
            'imageH' => 44,
            'imageW' => 90,
            'fontSize' => 14,
            'useNoise' => false,
            'fontttf' => '5.ttf',
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    private function sverify($verify){
        $obj = new \Think\Verify();
        return  $obj->check($verify);
    }
}