<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>企业通讯录</title>
		<link rel="stylesheet" href="/tongxun/Public/Home/css/amazeui.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/tongxun/Public/Home/css/core.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/menu.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/index.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/admin.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/page/typography.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/page/form.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
                <a href="index.html" class="logo"><span>企业通讯录</span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">个人中心</h4></li>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right"> 
					<!-- <li class="hidden-xs am-hide-sm-only">
					                        <form role="search" class="app-search">
					                            <input type="text" placeholder="Search..." class="form-control">
					                            <a href=""><img src="/tongxun/Public/Home/img/search.png"></a>
					                        </form>
					                    </li> -->
				</ul>
			</div>
		</header>
		<!-- end page -->
		
		
		<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				   <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">
				    	<!-- User -->
						<div class="user-box">
	                        <div class="user-img">
	                            <img src="/tongxun/Public<?php echo ($_SESSION['user']['touxiang']); ?>" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="false"></i></div>
	                        </div>
	                        <h5><a href="#"><?php echo ($_SESSION['user']['username']); ?></a> </h5>
	                        <!-- <ul class="list-inline">
	                            <li>
	                                <a href="#">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a> 
	                            </li>
	                        </ul> -->
	                    </div>
	                    <!-- End User -->
	            
						 <ul class="am-list admin-sidebar-list">
						    <li><a href="/tongxun/index.php/Home/Index/index.html"><span class="am-icon-home"></span> 通讯录</a></li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}" href="/tongxun/index.php/Home/Index/table_complete.html"><span class="am-icon-table"></span> 常用联系人  </a>
						      
						    </li> 
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 系统设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
						        <li><a href="/tongxun/index.php/Home/Index/form_validate.html" class="am-cf"> 个人中心</a></li>
						        <li><a href="/tongxun/index.php/Home/Index/form_basic.html">意见反馈</a></li>   
						        <li><a href="/tongxun/index.php/Home/Index/logout.html">退出</a></li>   
						      </ul>
						    </li>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->
		
		
		
	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box"> 
								
								<form action="" class="am-form" data-am-validator action="/tongxun/index.php/Home/Index/form_validate.html" method="post"  enctype="multipart/form-data">
								  <fieldset> 
								  <div class="am-form-group">
								      <label for="doc-vld-name-2">员工编号：<?php echo ($list["userid"]); ?></label>
								       
								    </div>
								    <div class="am-form-group" style="width: 50%">
								      <label for="doc-vld-name-2">用户名：</label>
								        <input type="text" id="doc-vld-name-2" minlength="2" placeholder="输入用户名（至少 2 个字符）"  name="username"  value="<?php echo ($list["username"]); ?>" required/>  
								       
								    </div>
								
								    <div class="am-form-group">
								      <label for="doc-vld-email-2">邮箱：
								      <input type="email" id="doc-vld-email-2" placeholder="输入邮箱" value='<?php echo ($list["email"]); ?>' name="email"  required/></label>
								    </div>
								
								    <div class="am-form-group" style="width: 50%">
								      <label for="doc-vld-url-2">电话：</label>
								      <input type="number" id="doc-vld-url-2" placeholder="输入电话号码" value='<?php echo ($list["tel"]); ?>' name="tel" required/>
								    </div>
								
								    <div class="am-form-group">
								      <label for="doc-vld-age-2">所属部门：<?php echo ($list["title"]); ?></label>
								      <!-- <input type="number" class=""  id="doc-vld-age-2" placeholder="输入年龄  18-120" min="18" max="120" disabled="disabled" value='<?php echo ($list["bumen"]); ?>' /> --> 
								    </div>
								
								    <!-- <div class="am-form-group">
								      <label class="am-form-label">爱好：</label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="橘子" name="docVlCb" minchecked="2" maxchecked="4" required> 橘子
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="苹果" name="docVlCb"> 苹果
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="菠萝" name="docVlCb"> 菠萝
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="芒果" name="docVlCb"> 芒果
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="香蕉" name="docVlCb"> 香蕉
								      </label>
								    </div> -->
								
								    <div class="am-form-group">
								      <label>性别： <?php echo ($list["sex"]); ?></label> 
								    </div>
								 	<div class="am-form-group">
								      <label>加入时间： <?php echo (substr($list["ctime"],0,10)); ?></label> 
								    </div>
								    <div class="am-form-group">
								      <label>修改头像： </label>
								      <input type="file" id="doc-vld-url-2" name="file" /> 
								    </div>
								    <!-- <div class="am-form-group">
								      <label for="doc-select-1">下拉单选框</label>
								      <select id="doc-select-1" required>
								        <option value="">-=请选择一项=-</option>
								        <option value="option1">选项一...</option>
								        <option value="option2">选项二.....</option>
								        <option value="option3">选项三........</option>
								      </select>
								      <span class="am-form-caret"></span>
								    </div>  -->
								
								     
								
								    <input class="am-btn am-btn-secondary" type="submit" value="提交"></input>
								  </fieldset>
								</form>
								
								
							</div>
						</div>
					<!-- Row end -->
				</div>
			
			
			
			
			</div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/tongxun/Public/Home/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/tongxun/Public/Home/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/tongxun/Public/Home/js/app.js" ></script>
		<script type="text/javascript" src="/tongxun/Public/Home/js/blockUI.js" ></script>
	</body>
	
</html>