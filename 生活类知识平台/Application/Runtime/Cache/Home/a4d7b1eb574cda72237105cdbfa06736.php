<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">

<head>
    <title>热门推荐 -寻觅,发现生活之美</title>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>寻觅 , 发现生活之美</title>
 <link  href="/xunmi/Public/Home/css/c.css" rel="stylesheet" type="text/css"/> 
 <link href="/xunmi/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/xunmi/Public/Home/image/bitbug_favicon.ico" rel="icon"/> 
<script src="/xunmi/Public/Home/js/jquery-3.2.1.min.js"></script>
<script src="/xunmi/Public/Home/js/bootstrap.js"></script>
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
                        <div class="dropdown" style="float:right;padding-top: 4px;margin: 20px 5px;">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="border: none;color:rgb(35,119,193)" >
                                  更多
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 100%">
                                  <li><a href="#">问题中心</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li ><a id="feedback" style="cursor: pointer">意见反馈</a></li>
                                </ul>
                              </div>
                    <div style="float:right;padding-top: 4px;margin: 22px 35px;"><a href="/xunmi/index.php/Home/Userlogin/logout">注销</a></div>
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


        <div id="remen">
            <p>❤喜欢❤
                <hr />
            </p>
        </div>
        <section id="hothot" style="position: relative">
            <div class="container">
                <div class="row">
                    <?php if(is_array($zan1)): foreach($zan1 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
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
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["h_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["h_author"]); ?><br><span>发布到 <?php echo ($vo["h_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan2)): foreach($zan2 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/festival/content/id/<?php echo ($vo["f_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['f_pic'] != null): ?><img src="/xunmi<?php echo ($vo["f_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["f_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["f_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["f_author"]); ?><br><span>发布到 <?php echo ($vo["f_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan3)): foreach($zan3 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/cook/content/id/<?php echo ($vo["f_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['f_pic'] != null): ?><img src="/xunmi<?php echo ($vo["f_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["f_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["f_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["f_author"]); ?><br><span>发布到 <?php echo ($vo["f_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan4)): foreach($zan4 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/trivial/content/id/<?php echo ($vo["t_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['t_pic'] != null): ?><img src="/xunmi<?php echo ($vo["t_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["t_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["t_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["t_author"]); ?><br><span>发布到 <?php echo ($vo["t_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan5)): foreach($zan5 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/mz/content/id/<?php echo ($vo["s_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['s_pic'] != null): ?><img src="/xunmi<?php echo ($vo["s_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["s_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["s_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["s_author"]); ?><br><span>发布到 <?php echo ($vo["s_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan6)): foreach($zan6 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/poem/content/id/<?php echo ($vo["p_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['p_pic'] != null): ?><img src="/xunmi<?php echo ($vo["p_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["p_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["p_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["p_author"]); ?><br><span>发布到 <?php echo ($vo["p_fabu"]); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <?php if(is_array($zan7)): foreach($zan7 as $key=>$vo): ?><div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel-body">
                                <div class="p">
                                    <div class="photo" style="height:235px;">
                                        <a href="/xunmi/index.php/Home/game/content/id/<?php echo ($vo["g_id"]); ?>" target="_blank" class="a">
                                            <?php if($vo['g_pic'] != null): ?><img src="/xunmi<?php echo ($vo["g_pic"]); ?>" height="235px" />
                                                <?php else: ?>
                                                <img src="/xunmi/Uploads/2019-08-23/暂无图片.jpg" height="235px" /><?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <div class="t"><?php echo ($vo["g_title"]); ?></div>
                                        <div class="d">
                                            <div class="d1"><a class="glyphicon glyphicon-thumbs-up zan"
                                                    style="text-decoration: none"></a><span><?php echo ($vo["zan"]); ?></span>
                                            </div>
                                            <div class="d2"><i class="glyphicon glyphicon-star-empty"
                                                    style="text-decoration: none"></i><span><?php echo ($vo["collection"]); ?></span>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <img width="24" height="24" src="/xunmi<?php echo ($vo["g_tou"]); ?>">
                                            <p style="color: #444;"><?php echo ($vo["g_author"]); ?><br><span>发布到 <?php echo ($vo["g_fabu"]); ?></span></p>
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