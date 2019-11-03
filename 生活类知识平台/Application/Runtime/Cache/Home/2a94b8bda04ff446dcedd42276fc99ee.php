<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>寻觅 , 发现生活之美</title>
 <link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
 <link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/> 
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<script src="/xunmi/Public/Home/js/bootstrap.js"></script>

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
                                    <a href="/xunmi/index.php/Home/Sh/index">生活百科</a>
                                    <a href="/xunmi/index.php/Home/Poem/index">诗词</a>
                                    <a href="/xunmi/index.php/Home/Game/index">娱乐</a></object>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5">
                        <div class="dropdown" style="float:right;padding-top: 3px;margin: 20px 12px;">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="border: none;color:rgb(35,119,193)" >
                                  更多
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 100%">
                                 <li><a href="/xunmi/index.php/Home/Share/lst" target="_blank">分享作品</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="/xunmi/index.php/Home/Question/index" target="_blank">问题中心</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li ><a id="feedback" style="cursor: pointer">意见反馈</a></li>
                                </ul>
                              </div>
                    <div style="float:right;padding-top: 4px;margin: 22px 25px;"><a href="/xunmi/index.php/Home/Userlogin/logout">注销</a></div>
                    <div style="float:right;padding-top: 4px;color:#aedeab;margin: 22px 0px;">用户: <a href="/xunmi/index.php/Home/Userlogin/info"><?php echo $_SESSION['username'];?></a></div>
            </div>
        </div>
        </div>
        </div>
</header>
<div id="block" style="display: none">
<div class="block bgover" style="z-index: 9000;border: none;margin: 0px;padding: 0px;width: 100%;height: 100%;top: 0px;left: 0px;background-color: rgb(0, 0, 0);opacity: 0.6;position: fixed;"></div>
<div class="block msgbox" style="z-index: 9011;width: 359px;height: 280px;background-color: white;top: 332px;right: 0px;position: fixed;padding: 0px 20px;cursor: default;">
<h4 style="font-weight: 800;    line-height: 30px;">意见反馈</h4>
<span class="glyphicon glyphicon-remove" id="close" style="cursor: pointer;float: right;top: -34px;color: rgb(223,223,223)"></span>
<p>反馈内容 <span style="color: red">(*必填)</span></p>
<form action="" method="post">
<textarea cols="42" rows="4" name="content" maxlength="400" placeholder="欢迎提出您在使用过程中遇到的问题或宝贵建议（400字以内），感谢您的支持。" required ></textarea>
<p>联系方式</p>
<input type="text" name="phone" style="width:318px" placeholder="请留下您的联系方式，以便我们及时回复您。"/><br/>
<input type="submit" class="btn btn-primary" style="margin-top: 15px;" value="提交反馈"/>
</form>
</div>
</div>
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
               $("#close").click(function(){
                   $('#block').hide();
               })
            })
           $(document).ready(function(){
               $('#feedback').click(function(){
                   $('#block').show();
               })
           })   
   </script>
   
     
    <section id="tou">
        <p class="text-center">寻觅， 发现生活之美</p>
        <form action="<?php echo U('search');?>" target="_blank" method="get">
            <input type="text" name="sou" class="sou1"  placeholder="搜索你喜欢的" />
            <input type="submit" value="" onclick="s()" class="sou2" style="background-image: url(/xunmi/Public/Home/image/search.png);"/>
        
    </form>
    <img src=" /xunmi/Public/Home/image/blue.jpg" />
    </section>
    
    <div id="remen">
        <p>热门推荐
            <hr />
        </p>
    </div>

    <section id="hothot" style="position: relative">
        <div class="container">
            <div class="row">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/Index/content/id/<?php echo ($vo["h_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['h_pic'] != null): ?><img src="/xunmi<?php echo ($vo["h_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["h_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["h_zan"]); ?></span>
                                                </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                style="text-decoration: none" ></i><span><?php echo ($vo["h_collection"]); ?></span></div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["h_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["h_author"]); ?><br><span>发布到 <?php echo ($vo["h_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
               <div class="list page b-page" >
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>
    </section>
    </body>
   
</html>