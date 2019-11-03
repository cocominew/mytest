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
<style type="text/css">
    input{text-align: center;
    border: 1px solid;
    margin: 0px 320px;
    border-radius: 25px;
    color: rgb(243, 117, 27);
    font-size: 25px;}
    .zuofa{
        margin-left: 360px;
    }
    .ci{margin-left: 0px;}
    .ci1{margin-left: 0px;}
    .shi{margin-left: 80px;}
    .shi1{margin-left: 80px;}
    .shi2{margin-left: 80px;}
    .fanyi{font-family: 微软雅黑;width: 600px;}
    .shangxi{font-size: 20px;font-weight: 800;}
    .shiren{margin-left: 250px;}
        @media (max-width:768px){
             input{
                margin: 0 120px;
                font-size: 18px;
            }
            .zuofa{margin-left: 0px;}
            img{
                max-width:90%;
                margin-left: 22px
            }
            .ci{margin-left: -191px;}
            .ci1{margin-left: -36px;}
            .shi{margin-left: -127px;}
            .shi1{margin-left: 28px;}
            .shi2{margin-left: 26px;}
            img{max-width:90%;}
            .fanyi{width: 440px;margin-left: 22px;}
            .shiren{margin-left: 177px;}
        }
        @media (min-width:768px) and (max-width:992px){
            input{
                margin: 0 290px;
            }
            .zuofa{margin-left: 70px;}
            .shangxi{margin-left: 116px;}
            .fanyi{margin: 0 auto;}
            .ci {margin-left: -4px;}
            .shi {margin-left: 70px;}
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
<div id="remen">
        <p>热门推荐
            <hr />
        </p>
    </div>
    <input type="hidden" class="h" value="<?php echo ($hots["h_id"]); ?>"/>
<?php if($hots['h_id'] == 2 ||$hots['h_id'] == 5 ||$hots['h_id'] == 8||$hots['h_id'] == 11): ?><div class="main" style="width: 1000px;height: 1500px;margin: 50px auto;max-width: 100%">
    
		<?php echo htmlspecialchars_decode($hots['h_content']);?>
		
</div><?php else: ?>
<div class="main" style="width: 600px;height: 1500px;margin: 50px auto;max-width: 100%">
  
		<?php echo htmlspecialchars_decode($hots['h_content']);?>
		
</div><?php endif; ?>
</body>
</html>