<?php /* Smarty version Smarty-3.1.6, created on 2017-12-05 00:48:52
         compiled from "./app/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:212505a2564437cc1c0-67459938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e7e335543dbfa099218e03468395d43a0c342b' => 
    array (
      0 => './app/Home/View\\User\\login.html',
      1 => 1512406131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212505a2564437cc1c0-67459938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a25644380a9c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25644380a9c')) {function content_5a25644380a9c($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>漂亮支持响应式多终端适配的网站登录页面模板 - JS代码网</title>
    <meta name="keywords" content="网站模板,手机网站模板,手机登录页面,登录页面HTML,免费网站模板下载" />
    <meta name="description" content="JS代码网提供高质量手机网站模板下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_PATH;?>
/reset.css">
    <link rel="stylesheet" href="<?php echo @CSS_PATH;?>
/supersized.css">
    <link rel="stylesheet" href="<?php echo @CSS_PATH;?>
/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<!--<a href="/txl/index.php/home/index/index.html">123</a>-->
<h1 style="color:red"><?php echo $_SESSION['user']['name'];?>
</h1>
<div class="page-container">
    <h1>登录</h1>
    <form action="" method="post">
        <input type="text" id="username" name="username" class="username" placeholder="用户名">
        <input type="password" id="password" name="password" class="password" placeholder="密码">
        <button type="submit">提交</button>
        <div class="error"><span>+</span></div>
    </form>
</div>

<!-- Javascript -->
<script src="<?php echo @JS_PATH;?>
/jquery-1.8.2.min.js"></script>
<script src="<?php echo @JS_PATH;?>
/supersized.3.2.7.min.js"></script>
<script src="<?php echo @JS_PATH;?>
/supersized-init.js"></script>
<script>

    jQuery(document).ready(function() {

        $('.page-container form').submit(function(){
            var username = $(this).find('.username').val();
            var password = $(this).find('.password').val();
            if(username == '') {
                $(this).find('.error').fadeOut('fast', function(){
                    $(this).css('top', '27px');
                });
                $(this).find('.error').fadeIn('fast', function(){
                    $(this).parent().find('.username').focus();
                });
                return false;
            }
            if(password == '') {
                $(this).find('.error').fadeOut('fast', function(){
                    $(this).css('top', '96px');
                });
                $(this).find('.error').fadeIn('fast', function(){
                    $(this).parent().find('.password').focus();
                });
                return false;
            }
            console.log(username);
            $.ajax({
                type: "POST",
                url: "http://localhost/txl/index.php/home/user/verification.html",
                data: {username:username, password:password},
                dataType: "json",
                success: function(data){
                    if(data.status == 'success'){
                        alert("success");
                    }else{
                        alert(data.message);
                    }
                }
            });
        });

        $('.page-container form .username, .page-container form .password').keyup(function(){
            $(this).parent().find('.error').fadeOut('fast');
        });

    });
</script>
</body>

</html>


<?php }} ?>