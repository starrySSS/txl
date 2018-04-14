<?php
namespace Admin\Controller;
use Think\Controller;
vendor('PHPExcel.Classes.PHPExcel'); //导入第三方类库，调用的thinkPHP/library/Vendor/PHPExcel
class IndexController extends BaseController {
    public function __construct()//构造函数，魔法方法
    {
        parent::__construct(); //初始化子类的时候同时调用父类的__constrcut()
     }
    
    //首页用户列表
    public function index()
    {
    	$count = M("user")->where('status > 0')->count();//获取页数
        $Page = new \Think\Page($count,4);		
        $home = M("user a")->field('a.*,b.title')->join('left join a_bumen b on b.id = a.bumen')->where('a.status > 0')->limit($Page->firstRow.','.$Page->listRows)->select();//调用分页函数
		$Page->setConfig('next', 'next');
        $Page->setConfig('prev', 'prev');
        $show = $Page->show(); //ls分页显示输出
        $this->assign('page', urldecode($show)); // 赋值分页输出，urldecode解码已编码的url地址
        $this->assign("home",$home);
        $this->assign('index','index');
        $this->display();//输出对应模版
    }
	
     //首页通讯录添加、修改用户
    public function add()
    {
        $id = I("get.id"); //I =input ,输入变量，相当于相当于 $_GET['id']
        if(IS_POST){   
            $data = I('post.'); //提交所有字段
            if($_FILES['img']['size']){
                $config = array('savePath'=>'./Uploads/','rootPath'=>'./Public/');//savePath设置上传子目录，rootPath设置上传目录
                $upload = new \Think\Upload($config); // 实例化上传类
                $info   =   $upload->uploadOne($_FILES['img']);//uploadOne上传一个文件
                $pic = $info['savepath'].$info['savename']; //获取上传信息
                $data['touxiang'] = $pic/*?substr($pic, 1):I("post.img")*/;
            } 
            switch ($data['bumen']) {
                case 1:
                    $data['status'] = 2;  //管理员
                    break;
                case 2:
                    $data['status'] = 3;  //超级管理员
                    break;
                default:
                    $data['status'] = 1;  //普通学生
                    break;
            }
            if(!$id){ 
                $a = M('user')->field('id')->where('tel = '.$data['tel'])->find();
                $id = $a?$a['id']:'';
            }
            $data['ctime'] = date("Y-m-d H:i:s",time());
            if($id){
                $res = M("user")->where("id=%d",$id)->save($data);
                if($res){
                    $this->success("修改成功",U("index"));die;
                }else{
                    $this->error("修改失败",U("index"));
                }
            }else{
                $res = M("user")->add($data);
                if($res){
                    $this->success("添加成功",U("index"));die;
                }else{
                    $this->error("添加失败",U("index"));
                }
            }
        }
        $bumen = M('bumen')->where('status = 1')->select(); 
        $home = M("user")->where("id=%d",$id)->find(); 
        $this->assign("home",$home);
        $this->assign("bumen",$bumen);  
        $this->display();
    } 
    // 删除
    public function del()
    {
        $id = I("post.id");
        $type = I("post.type");
        switch ($type) {
            case 'indexbanner': 
                if($_SESSION['adminuser']['id'] != $id && $_SESSION['adminuser']['status'] > 1 ){ 
                     $status = M('user')->field('status')->where(array('id'=>$id))->find();  
                     if($status['status'] >1 && $_SESSION['adminuser']['status'] != 3 ){
                        break;
                     }
                    $res = M("user")->where("id=%d",$id)->save(array('status'=>0));
                }
                break;  
            case 'news':
                if($id > 2){
                    $res = M("bumen")->where("id=%d",$id)->save(array('status'=>0)); 
                }

                break; 
        }
        if($res){
            $this->ajaxReturn("1");
        }else{
             $this->ajaxReturn("-1");
        }
    }

	//用户日志
    public function product()
	{
		$count=M("bumen")->count();
		$Page=new \Think\Page($count,8);
		$log =M("log a")->field('a.*,b.username')->order('a.id desc')->join('left join a_user b on b.id=a.uid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$Page->setConfig('next','next');
		$Page->setConfig('prev','prev');
		$show = $Page->show(); // 分页显示输出
        $this->assign('page', urldecode($show)); // 赋值分页输出
        $this->assign("log",$log);
        $this->assign('index','log');
        $this->display();
	}
    //部门
    public function news(){
        $count = M("bumen")->where("status=1")->count();
        $Page = new \Think\Page($count,8);
        $news = M("bumen")->where("status=1")->limit($Page->firstRow.','.$Page->listRows)->select();
        $Page->setConfig('next', '下一页');
        $Page->setConfig('prev', '上一页');
        $show = $Page->show(); // 分页显示输出
        $this->assign('page', urldecode($show)); // 赋值分页输出
        $this->assign("news",$news);
        $this->assign('index','news');
        $this->display();
    }
    //添加部门
    public function addnews(){
        $id = I("get.id");
        if($id < 3 && $id){
            $this -> error('管理员名称不能修改！');
        }
        if(IS_POST){ 
            $data['title'] = I("post.title"); 
            $data['status'] = 1;
            $data['ctime'] = date("Y-m-d H:i:s",time());
            if($id){
                $res = M("bumen")->where("id=%d",$id)->save($data);
                if($res){
                    $this->success("修改成功",U("news"));die;
                }else{
                    $this->error("修改失败",U("news"));
                }
            }else{
                $res = M("bumen")->add($data);
                if($res){
                    $this->success("添加成功",U("news"));die;
                }else{
                    $this->error("添加失败",U("news"));
                }
            }
        }
        $news = M("bumen")->where("id=%d",$id)->find();
        // dump($news);die;
        $this->assign("bumen",$news);  
        $this->display();
    }
	
	
    //导出通讯录
    public function getData()
    { 
        $data = M('user a')->field('a.id,a.username,a.tel,a.email,b.title')->join('left join a_bumen b on b.id=a.bumen')->where('a.status>0')->select();
		echo $date;
        sort($data); 
        //dump($data);die;
        $this -> push($data,'通讯录');
        $this -> success('通讯录导出成功！');
    }
    //导出 
    private function push($data,$name='Excel'){
        error_reporting(E_ALL);
        date_default_timezone_set('Europe/London');
        $objPHPExcel = new \PHPExcel(); 
         /*以下就是对处理Excel里的数据， 横着取数据，主要是这一步，其他基本都不要改*/
        foreach($data as $k => $v){
            $num=$k+1;
            $objPHPExcel->setActiveSheetIndex(0)
                     //Excel的第A列，uid是你查出数组的键值，下面以此类推
                      ->setCellValue('A'.$num, $num)    
                      ->setCellValue('B'.$num, $v['username'])
                      ->setCellValue('C'.$num, $v['tel'])
					  ->setCellValue('d'.$num, $v['email'])
					  ->setCellValue('e'.$num, $v['title']);
        }
            $objPHPExcel->getActiveSheet()->setTitle('通讯录');
            $objPHPExcel->getActiveSheet()->getStyle("$letter[$i]1")->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->setActiveSheetIndex(0);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$name.'.xls"');
            header('Cache-Control: max-age=0');
            $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            exit;
     }
     //留言展示
     public function getMsg()
     {
     	$count = M("message")->count();
        $Page = new \Think\Page($count,8);
        $message =  M('message a')->field('a.*,b.username')->join('left join a_user b on b.id = a.uid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$Page->setConfig('next', '下一页');
        $Page->setConfig('prev', '上一页');
        $show = $Page->show(); // 分页显示输出
        $this->assign('page', urldecode($show)); // 赋值分页输出
        $this->assign("message",$message);
        $this->assign('index','message');
        $this->display();
		
        
     }
}