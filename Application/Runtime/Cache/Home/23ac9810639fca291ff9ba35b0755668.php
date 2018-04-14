<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>企业通讯录</title>
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/amazeui.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/core.css" />
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/menu.css" />
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/index.css" />
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/admin.css" />
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/page/typography.css" />
		<link rel="stylesheet" href="/tongxun3/Public/Home/css/page/form.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
                <a href="index.html" class="logo"><span>企业通讯录</span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">意见反馈</h4></li>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right"> 
					<!-- <li class="hidden-xs am-hide-sm-only">
					                        <form role="search" class="app-search">
					                            <input type="text" placeholder="Search..." class="form-control">
					                            <a href=""><img src="/tongxun3/Public/Home/img/search.png"></a>
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
	                            <img  src="/tongxun3/Public<?php echo ($_SESSION['user']['touxiang']); ?>" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive" >
	                             
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="false"></i></div>
	                        </div>
	                        <h5><a href="#"><?php echo ($_SESSION['user']['username']); ?></a> </h5>
	                        <!-- <ul class="list-inline">
	                            <li>
	                                <a href="#" id="touxiang">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a> 
	                            </li>
	                        </ul> -->
	                    </div>
	                    <!-- End User -->
	            
						 <ul class="am-list admin-sidebar-list">
						    <li><a href="/tongxun3/index.php/Home/Index/index.html"><span class="am-icon-home"></span> 通讯录</a></li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}" href="/tongxun3/index.php/Home/Index/table_complete.html"><span class="am-icon-table"></span> 常用联系人  </a> 
						    </li> 
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-cog"></span> 系统设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
						        <li><a href="/tongxun3/index.php/Home/Index/form_validate.html" class="am-cf"> 个人中心</a></li>
						        <li><a href="/tongxun3/index.php/Home/Index/form_basic.html">意见反馈</a></li>   
						        <li><a href="/tongxun3/index.php/Home/Index/logout.html">退出</a></li>   
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
			 	
			
			<!-- row start -->
			<div class="am-g">
				<!-- col start -->
				<div class="am-u-md-6" style="width: 100%">
					<div class="card-box"> 
						<form class="am-form" action="/tongxun3/index.php/Home/index/form_basic.html" method="post"> 
						    <div class="am-form-group">
						    	<div class="am-g">
							      <label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ta-1">意见反馈：</label>
							      <textarea  name="content" class="am-u-md-10 form-control" rows="5" id="doc-ta-1" placeholder="请输入您的建议或者反馈内容！"></textarea>
						    	</div>
						    </div> 
						    <input value="Submit" type="submit" class="am-btn am-btn-primary" style="margin-left:10%"></input>
						</form>
					</div>
				</div>
				<!-- col end -->  
			</div> 
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/tongxun3/Public/Home/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/tongxun3/Public/Home/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/tongxun3/Public/Home/js/app.js" ></script>
		<script type="text/javascript" src="/tongxun3/Public/Home/js/blockUI.js" ></script>
	</body>
	
</html>