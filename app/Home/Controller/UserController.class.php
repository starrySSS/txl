<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->assign("test","1111111111");
        $this->display();
    }

    public function verification(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result['status'] = 'success';
        $result['message'] = '';
        if (isset($username)&&isset($password)){
            $user=M("User");
            $select = $user->where("user_id='".$username."'and password = '".$password."'")->field('name,nickname ,password')->select();
            if(!empty($select)){
                session_start();
                foreach ($select as $info){
                    if ($info['password'] == $password){
                        $_SESSION['user'] = array(
                            'user_id'=>$info['user_id'],
                            'name'=>$info['name'],
                            'nickname'=>$info['nickname']
                        );
                    }else{
                        $result['status'] = 'false';
                        $result['message'] = '密码不正确';
                    }
                }
            }else{
                $result['status'] = 'false';
                $result['message'] = '密码不正确';
            }
        }else{
            $result['status'] = 'false';
            $result['message']  = '请填写，用户名或密码"';
        }
        $result_json = json_encode($result);
        echo $result_json;
    }
}