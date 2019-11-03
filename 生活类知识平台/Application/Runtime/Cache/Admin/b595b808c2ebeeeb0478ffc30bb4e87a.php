<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
      <link rel="stylesheet" type="text/css" href="/xunmi/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/xunmi/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/xunmi/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/xunmi/index.php/Admin/Index/index">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo $_SESSION['admin_name'];?></a></li>
                <li><a href="/xunmi/index.php/Admin/Login/edit/id/<?php echo $_SESSION['admin_id'];?>">修改密码</a></li>
                <li><a href="/xunmi/index.php/Admin/Login/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
   <div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作管理</a>
                    <ul class="sub-menu">
                        <li><a href="/xunmi/index.php/Admin/Hot/lst"><i class="icon-font">&#xe005;</i>热门推荐栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Festival/lst"><i class="icon-font">&#xe005;</i>节日习俗栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Food/lst"><i class="icon-font">&#xe005;</i>家常菜谱栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Trivial/lst"><i class="icon-font">&#xe005;</i>旅游出行栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Sh/lst"><i class="icon-font">&#xe005;</i>生活百科栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Poem/lst"><i class="icon-font">&#xe005;</i>诗词栏</a></li>    
						<li><a href="/xunmi/index.php/Admin/Game/lst"><i class="icon-font">&#xe005;</i>娱乐栏</a></li> 						
                    </ul>
                     <a href="/xunmi/index.php/Admin/Letter/lst"><i class="icon-font">&#xe004;</i>收件箱</a>
                     <a href="/xunmi/index.php/Admin/Check/lst"><i class="icon-font">&#xe001;</i>作品审核</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>后台管理<span></span></span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    
                </div>
            </div>
        </div>
        
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>