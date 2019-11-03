<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>泉州师范学院教务系统</title>
    <style type="text/css">
        body{ margin:0;
            padding:0;
        }
        .head {
            background-image: url(../image/head_bg.jpg);
            height: 130px;
            width: 800px;
            margin: 0 auto;
            position:relative;
        }
        .head img {
            margin-top: 40px;
            margin-left: 65px;
            position: relative;
        }
        ul{
            list-style:none;
            height: 25px;
            width: 750px;
            margin:15px 5px;
            border-bottom:1px solid #F00;
        }
        .nav {
            height: 55px;
            width: 800px;
            margin:5px auto;
        }
        .nav li {
            float: left;
        }
        .nav li a {
            font-family: "微软雅黑";
            font-size: 15px;
            color: #C00;
            text-decoration: none;
            display: block;
            line-height:20px;
            margin-left:25px;
        }
        input{
            font-family: "微软雅黑";
            font-size: 15px;
            color: #C00;
            background-color:rgba(255,255,255,0.2);
            display: block;
            margin-left:25px;
            margin-top:-2px;
            border: 1px solid rgba(255,255,255,0.6);
        }
        .nav ul li a:hover{
            border-left:1px solid #F00;
            border-top:1px solid #F00;
            border-right:1px solid #F00;
            border-bottom:1px solid #FFF;
            padding-bottom:4px;
        }
        .nav ul li input:hover {
            border-left:1px solid #F00;
            border-top:1px solid #F00;
            border-right:1px solid #F00;
            border-bottom:1px solid #FFF;
            padding-bottom:5px;
        }
        .time{
            right: 270px;
            top:0px;
            position: absolute;
        }
        .xiaoxun h2{
            color: darkslateblue;
            font-family: 长城中行书体;
            top:40px;
            position: absolute;
            right: 300px;
        }
    </style>
</head>
<body>
<div class="head">
    <img src="../image/logo1820.png" />
</div>
<div class="time">
    <?php
    date_default_timezone_set('PRC');
    ?>
    <p style="color: #000066"><?php echo date("Y年m月d日")?>
        <?php $weekarry=array("日","一","二","三","四","五","六");echo"星期".$weekarry[date("w")]; ?>
        <?php echo date("H:i:s");?></p>
</div>
<div class="xiaoxun">
    <h2>善学如泉,正心至大</h2>
</div>
<div class="nav">
    <ul>
        <li><a class="shouye" href="shouye.php" target="mainFrame">首页</a></li>
        <li><a href="selectgrade.php" target="mainFrame">成绩查询</a></li>
        <li><a target="mainFrame" href="liuyan.php">留言板</a></li>
        </form>
    </ul>
</div>
</body>
</html>

