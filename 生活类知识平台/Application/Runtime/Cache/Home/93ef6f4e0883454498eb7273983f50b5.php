<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta content="text/html" http-equiv="Content-Type" charset="UTF-8" />
<title>问题中心 -寻觅,发现生活之美</title>

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

<style type="text/css">
.a{
    border: 1px solid  rgba(88, 87, 87, 0.4);
    background-color: rgb(247,248,250);
}
</style>
<script type="text/javascript">
function ans(obj){
        //obj.parentElement.style.backgroundColor="rgb(247,248,250)";
        obj.parentElement.classList.add("a");
        obj.nextElementSibling.style.display="block";
        obj.nextElementSibling.nextElementSibling.style.display="block";
        //obj.children[2].style.display="block";   
    };

$(document).ready(function(){
    $('.shouqi').click(function(){
        $('.txt').hide();
        $('.shouqi').hide();
        $('.k').removeClass("a");
    })
})
</script>
<body>  
        <div class="container">
            <div class="tiwen">
            <i class="glyphicon glyphicon-question-sign" style="color: rgb(88, 214, 71);font-size: 30px;"></i><span style="color: rgb(124, 122, 122);font-size: 30px;margin-left: 15px;">提问</span>
            </div>
            <div class="que">
            <form action="" method="post">
               <textarea type="text" name="que" class="que1" placeholder="一句话完整描述你的问题"></textarea><br/><br/>
               <input type="submit" class="btn btn-success pull-right "/> 
            </form>
            </div>
                    
            <div class="navbar navbar-default navbar-static-top navbar-xm" style="background-color: transparent;">
                              <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tab" aria-expanded="false">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">问题中心</a>
                              </div>

                              <div class="collapse navbar-collapse" id="xm-nav">
                                <ul class="nav navbar-nav">
                                  <li class="active">
                                      <a href="#all" aria-controls="all" role="tab" data-toggle="tab">全部问题</a></li>
                                  <li>
                                      <a href="#myque" aria-controls="myque" role="tab" data-toggle="tab">我的问题</a></li>
                                  <li>
                                      <a href="#myans" aria-controls="myans" role="tab" data-toggle="tab">我的回答</a></li>
                                  
                                </div></div>
            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="all" style="margin-top: 41px;padding-bottom: 56px;">
                             <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="k" style="margin-top: 41px;width:684px;border-bottom: 1px solid rgba(88, 87, 87, 0.4);border-top: 1px solid rgba(88, 87, 87, 0.4);">
                             <div style="font-size: 20px;"><?php echo ($vo["q_que"]); ?></div>
                           <?php if($vo['user_id']!=$_SESSION['user_id']): ?><div  style="color: rgb(92, 212, 92);margin-top: 32px;font-size: 17px;margin-left: 563px;cursor: pointer;" class="ans" onclick="ans(this)" >
                                        <i class="glyphicon glyphicon-pencil" style="margin-right: 6px;"></i>回答
                                        
                                    </div>
                       <?php else: ?>   
                                <div  style="color: rgb(175, 179, 175);margin-top: 32px;font-size: 17px;margin-left: 563px;" class="ans">
                                   <i class="glyphicon glyphicon-pencil" style="margin-right: 6px;"></i>回答
                                   
                                </div><?php endif; ?>
                              <div style="margin-top: -90px;display: none;margin-left:-689px;" class="txt">
                                <form action="" method="post">
                            <textarea type="text" cols="80" rows="10" name="ans" style="margin-top: 136px;margin-left: 726px;" placeholder="请在此输入您的回答"></textarea><br/>
                            <input type="submit" class="btn btn-success btn-sm" style="margin-left: 1263px;" value="回复"/> 
                        </form>
                        </div>
                        <div class="shouqi" style="display: none;cursor: pointer;margin-left: 37px;height: 45px;color: #9d9c9c;font-size: 14px;" ><span>收起</span><i class="glyphicon glyphicon-menu-up" style="color: rgb(211, 209, 209);margin-left: 5px;"></i></div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="myque" style="margin-top: 41px;padding-bottom: 56px;">
                              <?php if(is_array($myque)): $i = 0; $__LIST__ = $myque;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="k" style="margin-top: 41px;width:684px;border-bottom: 1px solid rgba(88, 87, 87, 0.4);border-top: 1px solid rgba(88, 87, 87, 0.4);">
                                    <div style="font-size: 20px;"><?php echo ($vo["q_que"]); ?></div>
                                    <div style="margin-top: 19px;"><?php echo (date("Y-m-d",$vo["q_time"])); ?></div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="myans" style="margin-top: 41px;padding-bottom: 56px;">
                                <?php if(is_array($myans)): $i = 0; $__LIST__ = $myans;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="k" style="margin-top: 41px;width:684px;border-bottom: 1px solid rgba(88, 87, 87, 0.4);border-top: 1px solid rgba(88, 87, 87, 0.4);">
                                    
                                    <div style="font-size: 18px;color: rgb(156, 153, 153);margin-top: 19px;">我的回答：<?php echo ($vo["q_ans"]); ?></div>
                                    <div style="margin-top: 19px;"><?php echo (date("Y-m-d",$vo["q_time"])); ?></div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                            </div>
                    </div>
            </div>
</body>
</head>
</html>