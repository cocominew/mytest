<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="zh-CN" >
<head>
<title>热门推荐  -寻觅,发现生活之美</title>
<link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
<link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/>
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#close').click(function(){
        $('#block').hide();
    })
})
$(document).ready(function(){
    $('#close1').click(function(){
        $('#block').hide();
    })
})
$(document).ready(function(){
    $('.login').click(function(){
        $('#block').show();
        $('.box').show();
        $('.box1').hide();  
    })
})
$(document).ready(function(){
    $('.regester').click(function(){
        $('#block').show();
        $(".box1").show();
        $('.box').hide();
    })
})
$(document).ready(function(){
    $('#checkreg').click(function(){
        $(".box").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(90deg)","-webkitTransition":"all 0.6s"});
        setTimeout(function(){  
            $(".box").hide();
            $(".box1").show();$('#block').show();
            $(".box").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(360deg)","-webkitTransition":"all 0.6s"});
        },600);      
})})
$(document).ready(function(){
    $('#checklog').click(function(){
        $(".box1").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(90deg)","-webkitTransition":"all 0.6s"});
        setTimeout(function(){  
            $(".box").show();
            $(".box1").hide();$('#block').show();
            $(".box1").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(360deg)","-webkitTransition":"all 0.6s"});
        },600);      
})})

</script>
</head>
<body>
<header id="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="tubiao">
                        <img src="/xunmi/Public/Home/image/flower.png" width="65px" height="65px;" /></div>
                    <span class="xunmi">寻觅</span>
                    <a class="fenlei">分类
                        <span id="down" class="glyphicon glyphicon-menu-down" style="margin-left:5px;"></span>
                        <div id="fenlei-content">
                            <div class="fenlei-top">
                                <object><a href="/xunmi/index.php/Home/Index/index/#remen" class="hot">热门推荐</a></object>
                            </div>
                            <div class="content">
                                <object><a href="/xunmi/index.php/Home/Festival/index">节日习俗</a>
                                    <a href="/xunmi/index.php/Home/Cook/index">家常菜谱</a>
                                    <a href="/xunmi/index.php/Home/Trivial/index">旅游出行</a>
                                    <a href="/xunmi/index.php/Home/Sh/index">生活百科</a>
                                    <a href="/xunmi/index.php/Home/Poem/index">诗词</a>
                                    <a>娱乐</a></object>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5">
                        <a href="/xunmi/index.php/Home/Userlogin/register" style="text-decoration: none"><div class="regester" style="cursor: pointer">注册</div></a>
                        <div class="login" style="cursor: pointer">登录</div>
                    </div>
            </div>
        </div>
</header>

<div id="block" style="display: none" >
<div class="block bgcover" style="z-index: 9000;border: none;margin: 0px;padding: 0px;width: 100%;height: 100%;top: 0px;left: 0px;background-color: rgb(0, 0, 0);opacity: 0.6;position: fixed;"></div>
<div class="block msgbox" style="z-index: 9011;position: fixed;padding: 0px;margin:-249px;width: 500px;height: 400px;top: 58%;left: 50%;text-align: left;color: rgb(0, 0, 0);cursor: default;background: none;">
<div class="box">
    <div class="title">
        <span>登录</span>
        <span class="glyphicon glyphicon-remove" id="close" style="cursor: pointer"></span>
    </div>
    <div class="login-content">
            <img src="/xunmi/Public/Home/image/flower.png" width="65px" height="65px;" style="margin-left: 156px"/>
            <span style="color: indianred; font-family: 微软雅黑; font-size: 30px;position: absolute;top: 57px;letter-spacing: 8px;">寻觅</span>
        <form action="" method="post">
            <div class="ids">
              <label>手机号/昵称/邮箱：</label><input type="text" id="p-username" name="username"><br>
            </div>
            <div class="psw">
              <label>输入密码：</label><input type="password" id="p-password" name="user_password"/>
            </div>
            <div class="sub" style="text-align: center">
                        <input type="submit" class="loginbtn" value="登录" style=" width: 212px;height: 40px;background-color: #ff7e7e;border-radius: 6px;position: absolute;margin: 28px -85px;"/>
                      
            </div>
            <div class="qq">
                    <a class="qqsite" href="#">
                        <i class="pg-QQ" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -36px -4px;"></i>
                        <span>QQ登录</span>
                      </a>
                      <a class="weibosite" href="#">
                            <i class="pg-weibo" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -4px -4px;"></i>
                            <span>微博登录</span>
                          </a>
                      <a class="weixinsite" href="#">
                                <i class="pg-weixin" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -165px -4px;"></i>
                                <span>微信登录</span>
                              </a>
            </div>
            <div style="margin-left: 162px">还没有寻觅帐号?&nbsp;&nbsp;&nbsp;<a class="zhuche" id="checkreg" href="/xunmi/index.php/Home/Userlogin/register">点击注册>></a></div>
        </form>
    </div>
</div>
</div>
</div>  
    <section id="hothot" style="position: relative">
            <div class="container">
                <div class="row">
                        <!-- <?php if($total !=0): ?>-->
                        <?php if(is_array($hots)): $i = 0; $__LIST__ = $hots;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="panel-body">
                                    <div class="p">
                                        <div class="photo" style="height:235px;">
                                            <a href="/xunmi/index.php/Home/Userlogin/content/id/<?php echo ($vo["h_id"]); ?>" target="_blank" class="a">
                                                    <img src="/xunmi<?php echo ($vo["h_pic"]); ?>" height="235px" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <div class="t"><?php echo ($vo["h_title"]); ?></div>
                                            <div class="d">
                                                <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                        style="cursor:pointer" ></a><span></span></div>
                                                <div class="d2"><i class="glyphicon glyphicon-star-empty collection"
                                                        style="cursor:pointer"></i><span></span></div>
                                            </div>
                                            <div class="author">
                                                <img width="24" height="24" src="/xunmi<?php echo ($vo["h_tou"]); ?>">
                                                <p style="color: #444;"><?php echo ($vo["h_author"]); ?><br><span>发布到 <?php echo ($vo["h_fabu"]); ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                    <!-- <h5 class="text-muted" style="bottom: -51px;left: 42%;position: absolute;">共搜索到<?php echo "$total";?>条记录</h5><?php else: ?>
                    <p style="margin-top:50px"><b>SORRY！此关键字没有查询到记录</b></p><?php endif; ?> -->
                    </div>
                    </div>
                    </section>
</body>
</html>
<script type="text/javascript">
    function s() {
        window.open("/xunmi/index.php/Home/Userlogin/search/<?php echo $_GET['sou'];?>")
    };
    $(".zan").click(function () {
   
        $.ajax({
            url: '<?php echo U("pros");?>',
            cache: false,
            async: false,
            
            dataType: "json",
            type: "post",
            success: function (datas) {
                console.log(datas);
                if (datas.status == 'success') {                     
                     alert('点赞成功~');
                } else {
                    alert("你已经点过赞了，不能再点"); 
                }
            },
            error: function (e) {
                alert("登录才能点赞");
                console.log(e);
            }
        })
    })

    $(".collection").click(function () {
   
   $.ajax({
       url: '<?php echo U("collection");?>',
       cache: false,
       async: false,
       
       dataType: "json",
       type: "post",
       success: function (datas) {
           console.log(datas);
           if (datas.status == 'success') {                     
                alert('收藏成功~');
           } else {
               alert("你已经收藏过了，不能再点"); 
           }
       },
       error: function (e) {
           alert("登录才能收藏");
           console.log(e);
       }
   })
})
</script>