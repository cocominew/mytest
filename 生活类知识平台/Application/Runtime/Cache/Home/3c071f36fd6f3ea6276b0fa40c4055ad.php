<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="zh-CN" >
<head>
<title>热门推荐  -寻觅,发现生活之美</title>
<head>
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
<section id="hothot" style="position: relative">
    <div class="container">
        <div class="row">
            <?php if(is_array($zan)): foreach($zan as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="panel-body">
                            <div class="p">
                                <div class="photo" style="height:235px;">
                                    <a href="/xunmi/index.php/Home/Like/content/id/<?php echo ($vo["h_id"]); ?>" target="_blank" class="a">
                                            <img src="/xunmi<?php echo ($vo["h_pic"]); ?>" height="235px" />
                                    </a>
                                </div>
                                <div class="text">
                                    <div class="t"><?php echo ($vo["h_title"]); ?></div>
                                    <div class="d">
                                        <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                        <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                            style="text-decoration: none" ></i><span><?php echo ($vo["collection"]); ?></span></div>
                                    </div>
                                    <div class="author">
                                        <img width="24" height="24" src="/xunmi<?php echo ($vo["h_tou"]); ?>">
                                        <p style="color: #444;"><?php echo ($vo["h_author"]); ?><br><span>发布到 <?php echo ($vo["h_fabu"]); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>
        </div>
    </div>
</section>
</body>
</html>