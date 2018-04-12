<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{	
	public function __construct()
	{ 
		parent::__construct();  
		if( $_SESSION['user']['id']){
			$startcount = strripos($_SERVER['REQUEST_URI'],'/'); 
		 	$lastcount = strripos($_SERVER['REQUEST_URI'],'.'); 
		 	$action = substr($_SERVER['REQUEST_URI'],$startcount+1,$lastcount-$startcount-1);
		 	$add['uid'] = $_SESSION['user']['id'];
		 	$add['action'] = $action;
		 	$add['ctime'] = date('Y-m-d H:i:s');
			M('log')->add($add);
		} 
	}
    public function index()
    {
         
    	if(!$_SESSION['user']){
    		 $this->error("登录后访问",U("Home/index/login"));
    	}
    	if(I('post.search')){ 
    		$where = 'a.status >0 and  a.username like "%'.I('post.search').'%"';
    	}else{
    		$where = 'a.status >0 and a.id != '.$_SESSION['user']['id'];
    	}
    	$list = M('user a')->field('a.*,b.title')->where($where)->join('left join a_bumen b on b.id = a.bumen')->select(); 
        foreach ($list as $key => $value) {
            $list[$key]['userid'] = 10000+$value['id'];
        }
    	$this -> assign('list',$list); 

    	$this -> display();
    }
    //登录
    public function login()
    {
        if (IS_POST) {
            $username = I("post.username");
            $userpwd = I("post.password");  
            $map['tel'] = $username;
            $map['password'] = $userpwd;
            $map['status'] = 1;
            $data = M('user')->where($map)->find();
            if($data){
                $login_success['id'] = $data['id'];
                $login_success['username'] = $data['username'];
                $login_success['touxiang'] = $data['touxiang'];
                $_SESSION['user'] = $login_success;
                $this->success('登陆成功',U("Home/index/index"));die;
            }else{
                $this -> error('用户名或密码错误');die;
            }
        }
        $this->display();
    }  
    //退出
    public function logout()
    {
        $_SESSION['user'] = null;
        session_unset();
        session_destroy();
        $this->success("退出成功",U("Home/index/login"));
    }
    //常用联系人
    public function table_complete()
    {
    	if(!$_SESSION['user']){
    		 $this->error("登录后访问",U("Home/index/login"));
    	}
    	if(I('post.search')){  
    		$where = 'a.uid = '.$_SESSION['user']['id'].' and  b.username like "%'.I('post.search').'%"';
    	}else{
    		$where = array('a.uid'=>$_SESSION['user']['id']);
    	}
    	$list = M('common_user a')->field('a.id,b.username,b.tel,a.ctime')->where($where)->join('left join a_user b on b.id = a.teluserid')->select();
    	$this -> assign('list',$list);  
    	$this -> display();
    }
	//添加常用联系人
    public function searchCommUser()
    {
        if(!$_SESSION['user']){
             $this->error("登录后访问",U("Home/index/login"));
        }

            $data = I('get.'); 
 
            $data['teluserid'] = $data['userid']; 
            $data['uid'] = $_SESSION['user']['id']; 
            $data['ctime'] = date('Y-m-d H:i:s');
         
            M('common_user')->add($data); 
            $this -> success('添加成功',U('Home/index/table_complete'));die;  
    }
    //查询常用联系人
    public function addCommonUser()
    {
    	if(!$_SESSION['user']){
    		 $this->error("登录后访问",U("Home/index/login"));
    	}
    	if(I('post.search')){ 
            $where = 'a.status >0 and  a.username like "%'.I('post.search').'%"';
        }else{
            $where = 'a.status >0 and a.id != '.$_SESSION['user']['id'];
        }
        $list = M('user a')->field('a.*,b.title')->where($where)->join('left join a_bumen b on b.id = a.bumen')->select(); 
        foreach ($list as $key => $value) {
            $list[$key]['userid'] = 10000+$value['id'];
        }
        $this -> assign('list',$list); 
    	$this -> display();
    }
    //删除常用联系人
    public function delCommonUser()
    {
    	$data['id'] = I('get.id');
    	M('common_user')->where($data)->delete();
    	$this -> redirect('/Home/index/table_complete');
    }
    //个人中心
    public function form_validate()
    {
    	 
    	if(!$_SESSION['user']){
    		 $this->error("登录后访问",U("Home/index/login"));
    	}
    	if(IS_POST){
    		$data = I('post.'); 
    		$data['id'] = $_SESSION['user']['id']; 
    		$data['ctime'] = date('Y-m-d H:i:s');   
    		if($_FILES['file']['size']){
    			$config = array('savePath'=>'./Uploads/','rootPath'=>'./Public/');
	            $upload = new \Think\Upload($config);// 实例化上传类
	            $info   =   $upload->uploadOne($_FILES['file']);
	            $pic = $info['savepath'].$info['savename'];
    			$data['touxiang'] = $pic;
    			$login_success['touxiang'] = $data['touxiang'];
    			$login_success['username'] = $data['username'];
    			$login_success['id'] = $_SESSION['user']['id'];
                $_SESSION['user'] = $login_success;
    		}
    		M('user')->save($data);
    		$this -> success('修改成功',U('Home/index/form_validate'));die; 
    	}
    	$list = M('user a')->field('a.*,b.title')->where(array('a.id'=>$_SESSION['user']['id']))->join('left join a_bumen b on b.id = a.bumen')->find();

    	$list['userid'] = 10000+$list['id']; 
    	$this -> assign('list',$list);
    	$this -> display();
    }	
    //意见反馈
    public function form_basic()
    {
    	if(!$_SESSION['user']){
    		 $this->error("登录后访问",U("Home/index/login"));
    	}
    	if(IS_POST){
    		$data = I('post.'); 
    		$data['uid'] = $_SESSION['user']['id']; 
    		$data['ctime'] = date('Y-m-d H:i:s');  
    		M('message')->add($data);
    		$this -> success('反馈成功',U('Home/index/form_basic'));die; 
    	}
    	$this -> display();
    }  
}