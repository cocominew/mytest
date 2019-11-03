<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta content="text/html" http-equiv="Content-Type" charset="UTF-8" />
    <title>节日习俗 -寻觅,发现生活之美</title>
    <style type="text/css">
      .b-page {
    background: #fff;
    box-shadow: 0px 1px 2px 0px #555;
      }
      .page {
          width: 99%;
          padding: 30px 15px;
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
<title>寻觅 , 发现生活之美</title>
 <link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
<link href="/xunmi/Public/Home/css/f.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/>
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$("#fenlei-content").mouseleave(function(){
    $("#fenlei-content").hide();
})})
function showlink(){
    window.setTimeout('showl()',500);
}function showl(){
    document.getElementById("fenlei-content").style.display="block";
}
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
            $("#dw").click(function(){
                n=600;
                for(i=n;i>=1;i--){
                    window.scrollBy(0,+1);
                }
            });
            $("#cunjie").click(function(){
                n=600;
                for(i=n;i>=1;i--){
                    window.scrollBy(0,+1);
                }
            });
            $("#fq").click(function(){
                n=600;
                for(i=n;i>=1;i--){
                    window.scrollBy(0,+1);
                }
            });
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
<body>
<div class="head">
 <div class="guding" style="position: fixed;z-index: 998;width: 100%;height: 70px;background-color: white;">
<div class="tubiao">
<img src="/xunmi/Public/Home/image/flower.png" width="65px" height="65px;"/></div>
<span class="xunmi">寻觅</span>
<p class="fenlei" onmouseout="showlink()">分类
<span  id="down" class="glyphicon glyphicon-menu-down" style="margin-left:5px;"></span></p>
<div id="fenlei-content">
<div class="fenlei-top">
<a href="/xunmi/index.php/Home/Index/index/#remen" class="hot">热门推荐</a>
</div>
<div class="content">
    <a href="/xunmi/index.php/Home/Festival/index">节日习俗</a>
    <a href="cook.html">家常菜谱</a>
    <a href="trivial.html">旅游出行</a>
    <a href="meizhuang.html">美妆护肤</a>
    <a href="poem.html">诗词</a>
    <a>娱乐</a>
</div></div>
 <div style="float:right;padding-top: 4px;color:#F00;margin: 22px 35px;"><a href="/xunmi/index.php/Home/Login/logout">注销</a></div><div style="float:right;padding-top: 4px;color:#aedeab;margin: 22px 0px;">用户: <a href="/xunmi/index.php/Home/Login/info"><?php echo $_SESSION['user_name'];?></a></div>
 </div></div>
<script type="text/javascript">
function dw(){
	window.open("/xunmi/index.php/Home/Festival/content/id/1")
}
function cj(){
	window.open("/xunmi/index.php/Home/Festival/content/id/2")
}
function fq(){
	window.open("/xunmi/index.php/Home/Festival/content/id/3")
}
</script>
<div class="play">
    <div class="pic">
        <img src="/xunmi/Public/Home/image/dw.jpg" id="dw" onclick="dw()" style="cursor: pointer"/>
	   <img src="/xunmi/Public/Home/image/cunjie.jpg" id="cunjie" onclick="cj()" style="cursor: pointer"/>
		<img src="/xunmi/Public/Home/image/fq.jpg" id="fq" onclick="fq()" style="cursor: pointer"/>
    </div>
    <div class="list">
        <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="jiantou">
        <span class="glyphicon glyphicon-chevron-left" id="zuo"></span>
        <span class="glyphicon glyphicon-chevron-right" id=you></span>
    </div>
</div>
<p style="color: #9c9898;margin-left:55px;font-size: 15px;margin-bottom: 33px;margin-top:11px;" >————————————————————————————————————<span style="padding-left: 49px;padding-right: 49px;">节日习俗</span>————————————————————————————————————</p>
<div class="hot-content">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="fes1" style="float:left;margin-left:15px;margin-top:20px;">
    <div class="p">
        <div class="photo" style="height:235px;">
        <a href="/xunmi/index.php/Home/Festival/content/id/<?php echo ($vo["f_id"]); ?>" target="_blank" class="a">
		<?php if($vo['f_pic'] != null): ?><img src="/xunmi<?php echo ($vo["f_pic"]); ?>" height="235px" />
			 <img src="/xunmi/Tous/2019-08-22/play.png"  height="95px" style="margin-top: -239px;width: 98px;margin-left: 67px;" style="cursor: pointer">
        <?php else: ?>
		<img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" />
			 <img src="/xunmi/Tous/2019-08-22/play.png"  height="95px" style="margin-top: -239px;width: 98px;margin-left: 67px;" style="cursor: pointer"><?php endif; ?>
		</a>
        </div>
	<div class="text" >
            <div class="t"><?php echo ($vo["f_title"]); ?></div>
            <div class="d">
                <div class="d1"><i class="glyphicon glyphicon-thumbs-up"></i><span>1</span></div>
                <div class="d2"><i class="glyphicon glyphicon-star-empty"></i><span>20</span></div>
            </div>
            <div class="author">
                <img width="24" height="24" src="/xunmi<?php echo ($vo["f_tou"]); ?>"><p style="color: #444;"><?php echo ($vo["f_author"]); ?><br><span>发布到 <?php echo ($vo["f_fabu"]); ?></span></p>
            </div>		
	</div>
    </div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="list page b-page" style="margin-top: 833px;position: absolute;margin-left: 15px;">
		<?php echo ($page); ?>
				</div></div>
            </body>
</html>