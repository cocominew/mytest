<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寻觅 , 发现生活之美</title>
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
<link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/>

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
    })
})
$(document).ready(function(){
    $('.regester').click(function(){
        $('#block').show();
    })
})
$(document).ready(function(){
    $('#checkreg').click(function(){
        $(".msgbox").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(90deg)","-webkitTransition":"all 0.6s"});
        setTimeout(function(){  
          $('#block').show();
            $(".msgbox").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(360deg)","-webkitTransition":"all 0.6s"});
        },600);      
})})
$(document).ready(function(){
    $('#checklog').click(function(){
        $(".msgbox").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(90deg)","-webkitTransition":"all 0.6s"});
        setTimeout(function(){  
            $('#block').show();
            $(".msgbox").css({"transformStyle":"preserve-3d","-webkitTransform":"rotateY(360deg)","-webkitTransition":"all 0.6s"});
        },600);      
})})

</script>
<style type="text/css">
    .b-page {
        background: #fff;
        box-shadow: 0px 1px 2px 0px #555;
    }

    .page {
        width: 99%;
        padding: 30px 15px;
        bottom: 0px;
        right: 0px;
        background: #FFF;
        text-align: right;
        overflow: hidden;
    }

    .first,
    .prev,
    .current,
    .num,
    .current,
    .next,
    .end {
        padding: 8px 16px;
        margin: 0px 5px;
        display: inline-block;
        color: #008CBA;
        border: 1px solid #dcd5d5;
        border-radius: 5px;
    }

    .first:hover,
    .prev:hover,
    .current:hover,
    .num:hover,
    .current:hover,
    .next:hover,
    .end:hover {
        text-decoration: none;
        background: #06c1f7;
    }

    .current {
        background-color: #06c1f7;
        color: #FFF;
        border-radius: 5px;
        border: 1px solid #ffffff;
    }

    .current:hover {
        text-decoration: none;
        background: #008CBA;
    }

    .page .not-allowed {
        cursor: not-allowed;
    }
</style>
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
    <section id="tou">
        <p class="text-center">寻觅， 发现生活之美</p>
        <form action="<?php echo U('search');?>" target="_blank" method="get">
            <input type="text" name="sou" class="sou1"  placeholder="搜索你喜欢的" />
            
            <input type="submit" value="" onclick="s()" class="sou2" style="background-image: url(/xunmi/Public/Home/image/search.png);"/>
        <!-- <?php header("Content-Type:text/html;charset=UTF-8"); $_SESSION['search']=$_GET['sou'];?> -->
    </form>
    <img src=" /xunmi/Public/Home/image/blue.jpg" />
    </section>
<div id="block" >
    <div class="block bgover" style="z-index: 9000;border: none;margin: 0px;padding: 0px;width: 100%;height: 100%;top: 0px;left: 0px;background-color: rgb(0, 0, 0);opacity: 0.6;position: fixed;"></div>
    <div class="block msgbox" style="z-index: 9011;position: fixed;padding: 0px;margin:-249px;width: 445px;height: 476px;top: 58%;left: 50%;background-color: white">
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
                        <a class="qqsite" onclick="toQQLogin()" style="cursor: pointer;">
                            <i class="pg-QQ" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -36px -4px;"></i>
                            <span>QQ登录</span>
                          </a>
                          <a class="weibosite" href="#">
                                <i class="pg-weibo" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -4px -4px;"></i>
                                <span>微博登录</span>
                              </a>
                          <a class="weixinsite"  style="cursor: pointer;">
                                    <i class="pg-weixin" style="background-image: url(/xunmi/Public/Home/image/qqwxwb.png);background-position: -165px -4px;"></i>
                                    <span>微信登录</span>
                                  </a>
                </div>
                <div style="margin-left: 162px">还没有寻觅帐号?&nbsp;&nbsp;&nbsp;<a class="zhuche" id="checkreg" href="/xunmi/index.php/Home/Userlogin/register">点击注册>></a></div>
            </form>
        </div>
    </div>
    </div>
    <div id="remen">
            <p>热门推荐
                <hr />
            </p>
        </div>
    
        <section id="hothot" style="position: relative">
            <div class="container">
                <div class="row">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="panel-body">
                                    <div class="p">
                                        <div class="photo" style="height:235px;">
                                            <a href="/xunmi/index.php/Home/Userlogin/content/id/<?php echo ($vo["h_id"]); ?>" target="_blank" class="a">
                                                <?php if($vo['h_pic'] != null): ?><img src="/xunmi<?php echo ($vo["h_pic"]); ?>" height="235px" />
                                                    <?php else: ?>
                                                    <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="text">
                                            <div class="t"><?php echo ($vo["h_title"]); ?></div>
                                            <div class="d">
                                                <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan" style="cursor: pointer;"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                                <div class="d2"><i class="glyphicon glyphicon-star-empty collection" style="cursor: pointer;"></i><span><?php echo ($vo["collection"]); ?></span></div>
                                            </div>
                                            <div class="author">
                                                <img width="24" height="24" src="/xunmi<?php echo ($vo["h_tou"]); ?>">
                                                <p style="color: #444;"><?php echo ($vo["h_author"]); ?><br><span>发布到 <?php echo ($vo["h_fabu"]); ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="list page b-page" >
                            <?php echo ($page); ?>
                        </div>
                    </div>
                </div>
            </section>
</body>
</html>
<script type="text/javascript">
 function toQQLogin() {
        var _url="<?php echo U('Index/QQLogin');?>";  //转向网页的地址;
        var name='QQ授权登录';    //网页名称，可为空;
        var iWidth=800; //弹出窗口的宽度;
        var iHeight=600;   //弹出窗口的高度;
        //获得窗口的垂直位置
        var iTop = (window.screen.availHeight - 30 - iHeight) / 2;
        //获得窗口的水平位置
        var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
        window.open(_url, name, 'height=' + iHeight +
            ',innerHeight=' + iHeight + ',width=' + iWidth +
            ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft +
            ',status=1,toolbar=no,menubar=no,location=1,resizable=no,scrollbars=0,titlebar=no');
    }

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