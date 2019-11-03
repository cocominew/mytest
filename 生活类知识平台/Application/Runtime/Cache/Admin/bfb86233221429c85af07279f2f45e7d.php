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
                <li><a href="#">管理员:<?php echo $_SESSION['user_name'];?></a></li>
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
                        <li><a href="/xunmi/index.php/Admin/Mz/lst"><i class="icon-font">&#xe005;</i>美妆护肤栏</a></li>
                        <li><a href="/xunmi/index.php/Admin/Poem/lst"><i class="icon-font">&#xe005;</i>诗词栏</a></li>    
						<li><a href="/xunmi/index.php/Admin/Game/lst"><i class="icon-font">&#xe005;</i>娱乐栏</a></li> 						
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/xunmi/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/xunmi/index.php/Admin/Poem/lst">诗词栏</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td><input class="common-text" name="author" size="50" value="" type="text">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="require-red">*</i>头像：
								<input name="tou" id="" type="file" value="上传头像">
								</td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="img" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
							<tr>
                                <th>发布到：</th>
								<td>
								<select name="fb">
								<option>节日习俗</option>
								<option>家常菜谱</option>
								<option>旅游出行</option>
								<option>美妆护肤</option>
								<option selected="selected">诗词</option>
								<option>娱乐</option>
								</select>
								</td>
							</tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
<script type="text/javascript" src="/xunmi/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/xunmi/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="/xunmi/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
	
<script type="text/javascript">
    // 实例化
    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:350,});
</script>