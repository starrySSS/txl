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
    <link rel="icon" type="image/png" href="/tongxun3/Public/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/tongxun3/Public/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/tongxun3/Public/Admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/tongxun3/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/tongxun3/Public/Admin/css/app.css">
    <link rel="stylesheet" href="/tongxun3/Public/Admin/css/page.css">
    <script src="/tongxun3/Public/Admin/js/echarts.min.js"></script>
</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/tongxun3/Public/Admin/img/logo.jpg" alt="logo" style="width: 50%;height: 50%;border-radius: 100%;">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">欢迎您：<?php echo ($user['username']); ?></span><!--<span class="tpl-header-list-user-ico"> <img src="/tongxun3/Public/Admin/img/user01.png"></span>-->
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="/tongxun3/index.php/Admin/login/logout.html"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <!-- <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li> -->
            </ul>
        </div>
    </header>
    <div class="tpl-page-container tpl-page-header-fixed" >


        <div class="tpl-left-nav tpl-left-nav-hover" style="margin-top: 10px;">
            <div class="tpl-left-nav-title " style="margin-bottom:20px">
            <h2 class="am-text-break" >管理列表</h2>
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
                                <a href="/tongxun3/index.php/Admin/index/index.html" <?php if($index == "index"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-phone"></i>
                                    <span>通讯录</span>
                                </a> 
                            </li>
                        </ul>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-calendar"></i>
                            <span>用户日志</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "product") OR ($index == "productbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <!-- <a href="/tongxun3/index.php/Admin/index/productbanner.html" <?php if($index == "productbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a> -->
                                <a href="/tongxun3/index.php/Admin/index/product.html" <?php if($index == "product"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-calendar-check-o"></i>
                                    <span>用户日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-sitemap"></i>
                            <span>组织架构</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "news") OR ($index == "newsbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                <!-- <a href="/tongxun3/index.php/Admin/index/newsbanner.html" <?php if($index == "newsbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a> -->
                                <a href="/tongxun3/index.php/Admin/index/news.html" <?php if($index == "news"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-sitemap"></i>
                                    <span>组织架构</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-edit"></i>
                            <span>留言管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" <?php if(($index == "news") OR ($index == "newsbanner")): ?>style="display: block;"<?php endif; ?>>
                            <li>
                                 <!--<a href="/tongxun3/index.php/Admin/index/newsbanner.html" <?php if($index == "newsbanner"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-angle-right"></i>
                                    <span>横幅图</span>
                                </a>--> 
                                <a href="/tongxun3/index.php/Admin/index/getMsg.html" <?php if($index == "news"): ?>class="active"<?php endif; ?>>
                                    <i class="am-icon-edit"></i>
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
                        <span class="am-icon-edit"></span> 留言列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                 </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g" style="margin-bottom: 10px;">
                        <div class="am-u-sm-12 am-u-md-6">
                           <!--  <div class="am-btn-toolbar">
                               <div class="am-btn-group am-btn-group-xs">
                                   <a href="/tongxun3/index.php/Admin/Index/addnews.html" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                               </div>
                           </div> -->
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="tpl-table-images am-scrollable-horizontal">
                            <table class="am-table am-table-striped am-table-hover table-main ">
                                    <thead>
                                        <tr>
                                            <th class="table-title">序号</th>
                                            <th class="table-title" style="width: 25%">留言内容</th> 
                                            <th class="table-date am-hide-sm-only">留言用户</th>
                                            <th class="table-date am-hide-sm-only">时间</th>
                                           <!--  <th class="table-set">操作</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($i); ?></td> 
                                            <td><?php echo ($v["content"]); ?></td> 
                                            <td><?php echo ($v["username"]); ?></td> 
                                            <td class="am-hide-sm-only"><?php echo ($v["ctime"]); ?></td>
                                           <!--  <td>
                                               <div class="am-btn-toolbar">
                                                   <div class="am-btn-group am-btn-group-xs">
                                                       <a href="/tongxun3/index.php/Admin/Index/addnews/id/<?php echo ($v["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                                       <button onclick="del(<?php echo ($v["id"]); ?>)" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                   </div>
                                               </div>
                                           </td> -->
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                            <div class="am-u-lg-12">
                                <div class="am-cf">
                                    <div class="am-fr">
                                        <?php echo ($page); ?>
                                    </div>
                                </div>
                            
                            </div>

                        </div>

                    </div>
                </div>
               <!-- <div class="tpl-alert"></div>-->
            </div>

        </div>

    </div>


    <script src="/tongxun3/Public/Admin/js/jquery.min.js"></script>
    <script src="/tongxun3/Public/Admin/js/amazeui.min.js"></script>
    <script src="/tongxun3/Public/Admin/js/iscroll.js"></script>
    <script src="/tongxun3/Public/Admin/js/app.js"></script>
</body>
</html>
<script>
    function del(id){
        var type = 'news';
    if(confirm("您确定要删除吗?")){
        $.post("/tongxun3/index.php/Admin/Index/del",{id:id,type:type},function(msg){
        if(msg==1){
          window.location.href="";
        }else{
            alert('管理员，超级管理员不能删除！');
        }
      })
    }
}
</script>