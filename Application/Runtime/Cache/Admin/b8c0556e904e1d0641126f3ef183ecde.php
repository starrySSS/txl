<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/tongxun/Public/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/tongxun/Public/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/tongxun/Public/Admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/tongxun/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/tongxun/Public/Admin/css/app.css">
    <link rel="stylesheet" href="/tongxun/Public/Admin/css/page.css">
    <script src="/tongxun/Public/Admin/js/echarts.min.js"></script>
</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/tongxun/Public/Home/img/logo.png" alt="logo" style="width: 50%;height: 50%;border-radius: 100%;">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">欢迎您：<?php echo ($user['username']); ?></span><span class="tpl-header-list-user-ico"> <img src="/tongxun/Public/Admin/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="/tongxun/index.php/Admin/login/logout.html"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <!-- <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li> -->
            </ul>
        </div>
    </header>
    <div class="tpl-page-container tpl-page-header-fixed">


        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                管理列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($index == index) OR ($index == copyright)): ?>active<?php endif; ?>">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == 'index') OR ($index == 'copyright')): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <a href="/tongxun/index.php/Admin/index/index.html" <?php if($index == "index"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>通讯录</span>
                                </a> 
                            </li>
                        </ul>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-home"></i>
                            <span>用户日志</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "product") OR ($index == "productbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <!-- <a href="/tongxun/index.php/Admin/index/productbanner.html" <?php if($index == "productbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a> -->
                                <a href="/tongxun/index.php/Admin/index/product.html" <?php if($index == "product"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>用户日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-home"></i>
                            <span>组织架构</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "news") OR ($index == "newsbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <!-- <a href="/tongxun/index.php/Admin/index/newsbanner.html" <?php if($index == "newsbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a> -->
                                <a href="/tongxun/index.php/Admin/index/news.html" <?php if($index == "news"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>组织架构</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-home"></i>
                            <span>留言管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "news") OR ($index == "newsbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <!-- <a href="/tongxun/index.php/Admin/index/newsbanner.html" <?php if($index == "newsbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a> -->
                                <a href="/tongxun/index.php/Admin/index/getMsg.html" <?php if($index == "news"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>留言管理</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                </ul>
            </div>
        </div>
        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                添加
            </div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">

                    <div class="am-g">
                        <div class="tpl-form-body tpl-form-line">
                            <form class="am-form tpl-form-line-form" action="/tongxun/index.php/Admin/Index/add/id/9" enctype="multipart/form-data" method="post">
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">用户头像<span class="tpl-form-line-small-title">Images</span></label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <?php if(!empty($home['touxiang'])): ?><img src="/tongxun/Public/<?php echo ($home["touxiang"]); ?>" alt=""><?php endif; ?>
                                            </div>
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                            <i class="am-icon-cloud-upload"></i> 添加</button>
                                            <input id="doc-form-file" type="file" value="<?php echo ($home["touxiang"]); ?>" name="img" multiple>
                                        </div> 
                                    </div>
                                     <div class="am-form-group">
                                    <label for="user-Phone" class="am-u-sm-3 am-form-label">账号（手机号） <span class="tpl-form-line-small-title">Phone</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-Phone" name="tel" value="<?php echo ($home["tel"]); ?>" placeholder="请输入手机号" required="required">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-Password" class="am-u-sm-3 am-form-label">密码<span class="tpl-form-line-small-title">Password</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-Password" name="password" value="<?php echo ($home["password"]); ?>" placeholder="请输入密码" required="required">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-Username" class="am-u-sm-3 am-form-label">用户名称<span class="tpl-form-line-small-title">Username</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-Username" name="username" value="<?php echo ($home["username"]); ?>" placeholder="请输入用户名称" required="required">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-Email" class="am-u-sm-3 am-form-label">邮箱<span class="tpl-form-line-small-title">Email</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-Email" name="email" value="<?php echo ($home["email"]); ?>" placeholder="请输入邮箱" required="required">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-Sex" class="am-u-sm-3 am-form-label">性别<span class="tpl-form-line-small-title">Sex</span></label>
                                     <label class="am-radio-inline">
                                        <input type="radio"  value="男" name="sex" <?php  if($home['sex'] == '男'){ echo ' checked="checked"';}?> required> 男
                                      </label>
                                      <label class="am-radio-inline">
                                        <input type="radio" value="女" name="sex" <?php  if($home['sex'] == '女'){ echo ' checked="checked"';}?>> 女
                                      </label>
                                </div>
                                  <div class="am-form-group">
                                    <label for="user-Department" class="am-u-sm-3 am-form-label">部门<span class="tpl-form-line-small-title">Department</span></label>
                                    <label class="am-radio-inline">
                                    <select id="user-Department"  class="am-u-sm-9" name="bumen" required>
                                        <?php if(is_array($bumen)): $i = 0; $__LIST__ = $bumen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>" <?php if($home['bumen'] == $v['id']){echo ' selected = "selected"';}?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select> 
                                    </label>
                                </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>

        </div>

    </div>


    <script src="/tongxun/Public/Admin/js/jquery.min.js"></script>
    <script src="/tongxun/Public/Admin/js/amazeui.min.js"></script>
    <script src="/tongxun/Public/Admin/js/iscroll.js"></script>
    <script src="/tongxun/Public/Admin/js/app.js"></script>
</body>
</html>
<script>
    //图片及时显示
    $("#doc-form-file").on('change',function(){
        var img  = this.files[0];//获取图片信息
        var type = img.type;//获取图片类型，判断使用
        var url  = getObjectURL(this.files[0]);//使用自定义函数，获取图片本地url
        // var fd   = new FormData();//实例化表单，提交数据使用
        var imglength = $(".tpl-form-file-img").find("img").length;
        if(imglength>0){
            $(".tpl-form-file-img").find('img').replaceWith('<img src="'+url+'" alt="">');
        }else{
            $(".tpl-form-file-img").append('<img src="'+url+'" alt="">');
        }
        
    })
    //获取图片url
    function getObjectURL(file) {
        var url = null ; 
        if (window.createObjectURL!=undefined) { // basic
          url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
          url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
          url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }
</script>