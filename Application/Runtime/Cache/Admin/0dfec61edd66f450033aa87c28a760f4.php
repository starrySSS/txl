<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>登录</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/tongxun3/Public/Admin/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/tongxun3/Public/Admin/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/tongxun3/Public/Admin/css/amazeui.min.css" />
  <link rel="stylesheet" href="/tongxun3/Public/Admin/css/admin.css">
  <link rel="stylesheet" href="/tongxun3/Public/Admin/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				企业通讯录<span> Login</span> <i class="am-icon-skyatlas"></i>
			</div>
		</div>

		<div class="login-font">
			<!-- <i>Log In </i> or <span> Sign Up</span> -->
			login
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" action="/tongxun3/index.php/Admin/Login/login.html" method="post">
				<fieldset>
					<div class="am-form-group">
						<input type="text" class="" name="username" id="doc-ipt-email-1" placeholder="输入用户名">
					</div>
					<div class="am-form-group">
						<input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="输入密码">
					</div>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="/tongxun3/Public/Admin/js/jquery.min.js"></script>
  <script src="/tongxun3/Public/Admin/js/amazeui.min.js"></script>
  <script src="/tongxun3/Public/Admin/js/app.js"></script>
</body>

</html>