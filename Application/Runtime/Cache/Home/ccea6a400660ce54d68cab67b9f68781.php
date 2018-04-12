<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>	
		<link rel="stylesheet" href="/tongxun/Public/Home/css/core.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/menu.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/amazeui.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/component.css" />
		<link rel="stylesheet" href="/tongxun/Public/Home/css/page/form.css" />
	</head>
	<body>
		<div class="account-pages">
			<div class="wrapper-page">
				<div class="text-center">
	                <a href="index.html" class="logo"><span>企业通讯录<span></span></span></a>
	            </div>
	            
	            <div class="m-t-40 card-box">
	            	<div class="text-center">
	                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
	                </div>
	                <div class="panel-body">
	                	<form class="am-form" action="/tongxun/index.php/Home/Index/login" method="post">
	                		<div class="am-g">
	                			<div class="am-form-group">
							      <input type="text" class="am-radius"  placeholder="Phone Number" name="username">
							    </div>
							
							    <div class="am-form-group form-horizontal m-t-20">
							      <input type="password" class="am-radius"  placeholder="Password" name="password">
							    </div>
							    
							    <div class="am-form-group ">
		                           	<label style="font-weight: normal;color: #999;">
								       <!--  <input type="checkbox" class="remeber"> Remember me -->
								    </label>
		                        </div>
		                        
		                        <div class="am-form-group ">
		                        	<input type="submit" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;" value="Log In"></input>
		                        </div>
		                        
		                        <div class="am-form-group ">
		                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> </a>
		                        </div>
	                		</div>

	                	</form>
							
	                </div>
	            </div>
			</div>
		</div>
	</body>
</html>