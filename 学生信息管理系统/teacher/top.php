<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>顶部</title>
    <style type="text/css">
        body,td,th {
            font-size: 100%;
        }
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        .top {
            background-image: url(../image/ding.png);
            height: 120px;
            width: 1326px;
        }
        .top h2 {
            font-family: "一往情深";
            font-size: 40px;
            color:#03F;
            left: 550px;
            top: 40px;
            position:absolute;
        }
        .top img {
            float: left;
            position: relative;
        }
        .time{
            right: 0px;
            top:0px;
            position: absolute;
        }
    </style>
</head>

<body>
<div class="top">
    <img src="../image/xiaohui.JPG" />
    <h2>学 生 信 息 管 理</h2>
</div>

<div class="time">
    <?php
    date_default_timezone_set('PRC');
    ?>
    <p style="color: #FF66CC"><?php echo date("Y年m月d日")?>
    <?php $weekarry=array("日","一","二","三","四","五","六");echo"星期".$weekarry[date("w")]; ?>
    <?php echo date("H:i:s");?></p>
</div>
</body>
</html>