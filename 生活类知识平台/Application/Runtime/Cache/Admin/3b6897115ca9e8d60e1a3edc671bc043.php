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
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/xunmi/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">收件箱</span></div>
        </div>
        <div class="search-wrap">
            
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
              
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>                          
                            <th>ID</th>
                            <th>反馈内容</th>
                            <th>联系方式</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                   
				   <?php if(is_array($feedbacks)): $i = 0; $__LIST__ = $feedbacks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="58" type="checkbox"></td>
                            <td><?php echo ($vo["feedback_id"]); ?></td>
                            <td><?php echo ($vo["feedback_content"]); ?></td>
                            <td><?php echo ($vo["feedback_lianxi"]); ?></td>
                            <td><?php echo (date("Y-m-d",$vo["feedback_time"])); ?></td>
                            <td>
                                <a class="link-del" href="/xunmi/index.php/Admin/Letter/del/id/<?php echo ($vo["feedback_id"]); ?>" onclick="return confirm('确定要删除 <?php echo ($vo["feedback_id"]); ?> 吗?');">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo "$total 条 1/1 页 "?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>