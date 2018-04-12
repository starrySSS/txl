<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public $user;
	public function __construct() {
		parent::__construct();
		if(isset($_SESSION['adminuser'])){
			$this->user = $_SESSION['adminuser'];
			// dump($this->user);
			$this->assign("user",$this->user);
		}else{
			$this->error("请登录",U('Login/login'));die;
		}
	}
}
