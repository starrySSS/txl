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
            
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 用户操作日志
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
                        <div class="tpl-table-images">
                           <div class="am-g">
                        <div class="tpl-table-images am-scrollable-horizontal">
                            <table class="am-table am-table-striped am-table-hover table-main ">
                                    <thead>
                                        <tr>
                                            <th class="table-title">序号</th> 
                                            <th class="table-title" style="width: 25%">用户名称</th>  
                                            <th class="table-date am-hide-sm-only" style="width: 25%">操作</th> 
                                            <th class="table-date am-hide-sm-only" style="width: 25%">创建时间</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php if(is_array($log)): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($i); ?></td>  
                                            <td><?php echo ($v["username"]); ?></td> 
                                            <td class="am-hide-sm-only">
                                            <?php
 switch($v['action']){ case 'index': echo '通讯录'; break; case 'table_complete': echo '常用联系人'; break; case 'form_validate': echo '个人中心'; break; case 'form_basic': echo '意见反馈'; break; case 'logout': echo '退出'; break; } ?></td> 
                                            <td class="am-hide-sm-only"><?php echo ($v["ctime"]); ?></td> 
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
    function del(id){
        var type = 'product';
    if(confirm("您确定要删除吗?")){
        $.post("/tongxun/index.php/Admin/Index/del",{id:id,type:type},function(msg){
        if(msg==1){
          window.location.href="";
        }
      })
    }
}
</script>