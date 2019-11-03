<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="zh-CN" prefix="og: http://ogp.me/ns#">
<head>
<title>节日习俗  -寻觅,发现生活之美</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>寻觅 , 发现生活之美</title>
 <link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
<link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/>
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

 var time=0;
        timeplay=null;
        $(document).ready(function(){ 
            $(".play .list ul li").mouseover(function(){
            clearInterval(timeplay);
            index=$(this).index();
            $(this).addClass("active").siblings().removeClass("active");
            $(".play .pic img").eq(index).show().siblings().hide();
        }).mouseout(function(){
            aa();
        })})
        $(document).ready(function(){
            $(".play .pic img").mouseover(function(){
            clearInterval(timeplay);
        }).mouseout(function(){
            aa();
        })
        })
        $(document).ready(function(){ 
            $("#zuo").click(function(){
            time--;
            if(time>=0){
                $(".play ul li").eq(time).addClass("active").siblings().removeClass("active");
                $(".play .pic img").eq(time).show().siblings().hide();
            }else{
                time=3;
                $(".play .list ul li").eq(time=2).addClass("active").siblings().removeClass("active");
                $(".play .pic img").eq(time=2).show().siblings().hide();
            }
        })})
        $(document).ready(function(){ 
            $("#zuo").mouseover(function(){
            clearInterval(timeplay);
        }).mouseout(function(){
            aa();
        })})
        $(document).ready(function(){ 
            $("#you").click(function(){
            time++;
            if(time<=2){
                $(".play ul li").eq(time).addClass("active").siblings().removeClass("active");
                $(".play .pic img").eq(time).show().siblings().hide();
            }else{
                time=-1;
                $(".play .list ul li").eq(time=0).addClass("active").siblings().removeClass("active");
                $(".play .pic img").eq(time=0).show().siblings().hide();
            }
        })})
        $(document).ready(function(){ 
            $("#you").mouseover(function(){
            clearInterval(timeplay);
        }).mouseout(function(){
            aa();
        })})
        aa();
        function aa(){
            timeplay=setInterval(function(){
                time++;
                if(time<3){
                    $(".play ul li").eq(time).addClass("active").siblings().removeClass("active");
                $(".play .pic img").eq(time).show().siblings().hide();
                }else{time=-1}   
            },800)
        }
        $(document).ready(function(){
            
         })
</script>
</head>
<script src="/xunmi/Public/Home/js/index.js" type="text/javascript"></script>
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
                                    <a href="/xunmi/index.php/Home/Mz/index">美妆护肤</a>
                                    <a href="/xunmi/index.php/Home/Poem/index">诗词</a>
                                    <a href="/xunmi/index.php/Home/Game/index">娱乐</a></object>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5">
                    <div style="float:right;padding-top: 4px;color:#F00;margin: 22px 35px;"><a href="/xunmi/index.php/Home/Userlogin/logout">注销</a></div><div style="float:right;padding-top: 4px;color:#aedeab;margin: 22px 0px;">用户: <a href="/xunmi/index.php/Home/Userlogin/info"><?php echo $_SESSION['username'];?></a></div>
                </div>
            </div>
        </div>
</header>  

<!-- <?php if($trivials['t_id']==2 ||$trivials['t_id']==4 ): ?><div class="main" style="width: 800px;height: 1500px;margin-left: 130px;margin-top: 50px;max-width: 100%">
    <?php echo htmlspecialchars_decode($trivials['t_content']);?>
</div><?php else: ?>
<div class="main" style="width: 600px;height: 1500px;margin: 50px auto;max-width: 100%">
    <?php echo htmlspecialchars_decode($trivials['t_content']);?>
</div><?php endif; ?> -->

<div class="main" style="width: 600px;height: 1500px;margin: 50px auto;max-width: 100%">
    <?php echo htmlspecialchars_decode($festivals['f_content']);?>	
        <!-- <?php echo htmlspecialchars_decode($hots['h_content']);?>
        <?php echo htmlspecialchars_decode($games['g_content']);?>
        <?php echo htmlspecialchars_decode($mzs['m_content']);?> -->
</div>


<div class="main" style="width: 1000px;height: 1500px;margin: 0px auto;max-width:100%">
        <!-- <?php echo htmlspecialchars_decode($foods['f_content']);?>	 -->
        <!-- <?php echo htmlspecialchars_decode($poems['p_content']);?>	 -->
</div>


</body>
</html>