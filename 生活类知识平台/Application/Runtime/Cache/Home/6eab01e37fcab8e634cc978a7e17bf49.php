<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="zh-CN" prefix="og: http://ogp.me/ns#">
<head>
<title>生活百科  -寻觅,发现生活之美</title>
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
  

<div id="remen" style="margin-top: -50px">
        <p>生活百科
            <hr />
        </p>
    </div>
    <input type="hidden" class="s" value="<?php echo ($shs["s_id"]); ?>"/>
<div class="main" style="width: 600px;height: 1500px;margin: 50px auto;max-width: 100%">
    <?php if($shs['zan'] == 1): ?><a class="glyphicon glyphicon-thumbs-up zan" style="font-size:15px;text-decoration: none;cursor: pointer;color: red">点赞</a>
    <?php else: ?><a class="glyphicon glyphicon-thumbs-up zan" style="font-size:15px;text-decoration: none;cursor: pointer;">点赞</a><?php endif; ?>
    <?php if($shs['collection'] ==1): ?><a class="glyphicon glyphicon-star-empty collection" style="font-size:15px;margin-top: 45px;text-decoration: none;cursor: pointer;margin-left: 25px;color:rgb(250, 247, 81)">收藏</a>
        <?php else: ?>
        <a class="glyphicon glyphicon-star-empty collection" style="font-size:15px;margin-top: 45px;text-decoration: none;cursor: pointer;margin-left: 25px;">收藏</a><?php endif; ?>
		<?php echo htmlspecialchars_decode($shs['s_content']);?>
		
</div>
</body>
</html>
<script type="text/javascript">
    $(".zan").click(function () {
        var id = $(".s").val();
        console.log(id);
      
        $.ajax({
            url: '<?php echo U("pros");?>',
            cache: false,
            async: false,
            data: {
                "id": id
            },
            dataType: "json",
            type: "post",
            success: function (datas) {
                console.log(datas);
                if (datas.status == 'success') {                     
                     alert('点赞成功~'); 
                     location.reload();
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
        var id = $(".s").val();
        console.log(id);
      
        $.ajax({
            url: '<?php echo U("collection");?>',
            cache: false,
            async: false,
            data: {
                "id": id
            },
            dataType: "json",
            type: "post",
            success: function (datas) {
                console.log(datas);
                if (datas.status == 'success') {                     
                     alert('收藏成功~'); 
                     location.reload();
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