<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=yes"/>
		<title>企业通讯录</title>
		<link rel="stylesheet" href="/txl/Public/Home/css/amazeui.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/core.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/menu.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/index.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/admin.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/page/typography.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/page/form.css" />
		<link rel="stylesheet" href="/txl/Public/Home/css/component.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
                <a href="index.html" class="logo"><span>企业通讯录</span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">通讯录</h4></li>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right">
					 
					<li class="hidden-xs am-hide-sm-only">
                        <form role="search" class="app-search" method="post" action="/txl/index.php/home/">
                            <input type="text" placeholder="username..." class="form-control" name="search"> 
                             <input type="submit"  value="" style=" width:30px; height:30px;  border:0; background:url(/txl/Public/Home/img/search.png) no-repeat left top;background-size: 24 24" />
                        </form>
                    </li>
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
	                            <img src="/txl/Public<?php echo ($_SESSION['user']['touxiang']); ?>" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="false"></i></div>
	                        </div>
	                        <h5><a href="#"><?php echo ($_SESSION['user']['username']); ?></a> </h5>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a> 
	                            </li>
	                        </ul>
	                    </div>
	                    <!-- End User -->
	            
						 <ul class="am-list admin-sidebar-list">
						    <li><a href="/txl/index.php/Home/Index/index.html"><span class="am-icon-home"></span> 通讯录</a></li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}" href="/txl/index.php/Home/Index/table_complete.html"><span class="am-icon-table"></span> 常用联系人  </a>
						      
						    </li> 
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-cog"></span> 系统设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
						        <li><a href="/txl/index.php/Home/Index/form_validate.html" class="am-cf"> 个人中心</a></li>
						        <li><a href="/txl/index.php/Home/Index/form_basic.html">意见反馈</a></li>   
						        <li><a href="/txl/index.php/Home/Index/logout.html">退出</a></li>   
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
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="am-u-md-3 am-u-end">
							<div class="card-box widget-user">
                                <div>
                                    <img src="/txl/Public/<?php echo ($v["touxiang"]); ?>" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">
                                        <h4 class="m-t-0 m-b-5 font-600"><?php echo ($v["username"]); ?></h4>
                                        <h4 class="m-t-0 m-b-5 font-600"><?php echo ($v["userid"]); ?></h4>
                                        <h4 class="m-t-0 m-b-5 font-600"><?php echo ($v["sex"]); ?></h4>
                                        <p class="text-muted m-b-5 font-13"><?php echo ($v["email"]); ?></p>
                                     	<p class="text-muted m-b-5 font-13"><a href="tel:   <?php echo ($v["tel"]); ?>">   <?php echo ($v["tel"]); ?></a></p> 
                                        <small class="text-warning"><b><?php echo ($v["title"]); ?></b></small>
                                    </div>
                                </div>
                            </div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>  
				
			</div>
		
		<div class="am-u-lg-12">
                <div class="am-cf">
                    <div class="am-fr">
                        <?php echo ($page); ?>
                    </div>
                </div>
                <hr>
            </div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/txl/Public/Home/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/txl/Public/Home/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/txl/Public/Home/js/app.js" ></script>
		<script type="text/javascript" src="/txl/Public/Home/js/blockUI.js" ></script>
		<script type="text/javascript" src="/txl/Public/Home/js/charts/echarts.min.js" ></script>
		<script type="text/javascript" src="/txl/Public/Home/js/charts/indexChart.js" ></script>

	</body>
	
</html>