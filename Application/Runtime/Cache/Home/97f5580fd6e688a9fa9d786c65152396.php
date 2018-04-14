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

					<li><h4 class="page-title">常用联系人</h4></li>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right">
					<!-- <li class="inform"><i class="am-icon-bell-o" aria-hidden="true"></i></li>
          <li class="hidden-xs am-hide-sm-only">
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
                    <img src="/tongxun3/Public<?php echo ($_SESSION['user']['touxiang']); ?>" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
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
			<!-- Start content -->
			<div class="content">
				<div class="card-box">
					<!-- Row start -->
					<div class="am-g">
						<div class="am-u-sm-12 am-u-md-6">
				          <div class="am-btn-toolbar">
				            <div class="am-btn-group am-btn-group-xs">
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> <a href="/tongxun3/index.php/Home/Index/addCommonUser">新增</a> </button>  
				            </div>
				          </div>
				        </div>	
				        
						<div class="am-u-sm-12 am-u-md-3"> 
                  <form role="search" class="app-search" method="post" action="/tongxun3/index.php/Home/index/table_complete.html">
  				          <div class="am-input-group am-input-group-sm">
  				            <input type="text" class="am-form-field" name="search" placeholder="输入联系人名称查找">
  				          <span class="am-input-group-btn">
  				            <input class="am-btn am-btn-default" type="submit">搜索</input> 
				          </span>
				          </div>
                 </form>
				        </div>
				      </div>
					  <!-- Row end -->
					  
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-num">序号</th> <th class="table-title">姓名</th><th class="table-type">手机</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set am-hide-sm-only">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr> 
                <td><?php echo ($i); ?></td>
                <td><a href="#"><?php echo ($v["username"]); ?></a></td>
                <td><a href="tel:<?php echo ($v["tel"]); ?>"><?php echo ($v["tel"]); ?></a></td> 
                <td class="am-hide-sm-only"><?php echo ($v["ctime"]); ?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                     <!--  <button class="am-btn am-btn-default am-btn-xs am-text-secondary am-hide-sm-only"><span class="am-icon-pencil-square-o"></span> <a href="/tongxun3/index.php/Home/Index/addCommonUser?id=<?php echo ($v["id"]); ?>">编辑</a></button> -->
                      <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> <a href="/tongxun3/index.php/Home/Index/delCommonUser?id=<?php echo ($v["id"]); ?>">删除</a></button>
                      
                      <!-- 
                      <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button> -->
                    </div>
                  </div>
                  
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
            <div class="am-u-lg-12">
                <div class="am-cf">
                    <div class="am-fr">
                        <?php echo ($page); ?>
                    </div>
                </div>
                <hr>
            </div>
            <!-- <div class="am-cf"> 
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div> -->
            <hr /> 
          </form>
        </div>

      </div>
					  <!-- Row end -->
					  
					</div>
				
				
				
				
				</div>
			

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