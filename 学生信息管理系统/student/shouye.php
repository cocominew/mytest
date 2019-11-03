<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页</title>
    <style type="text/css">
        body,html{
            height:100%
            margin:0;
            padding:0;}
        .one {
            width: 800px;
            height:100%;
            margin:-5px auto;
        }
        ul{
            list-style:none;
        }
        .one li a {
            font-family: "微软雅黑";
            font-size: 13px;
            color: #000;
            text-decoration: none;
            cursor:pointer;
        }
        .one li {
            line-height:30px;
        }
        .im{
            float: right;
            margin-right: -20px;
            margin-top: 10px;
        }
        .js{
            background: -webkit-linear-gradient(top,rgba(205,247,254,1),rgba(255,255,255,1),rgba(255,255,254,1));
            font-family: 微软雅黑;
            font-size: 15px;
            line-height: 30px;
        }
        .im1{
            float: left;
            margin: 15px;
        }
        .lianxi{
            width: 245px;height: 251px;
            float: right;
            margin-top: 200px;margin-right: -180px;
        }
    </style>
</head>

<body>
<div class="one">
    <?php
    date_default_timezone_set('PRC');
    ?>
    <p style="color: #04569A" align="right">&nbsp;&nbsp;&nbsp;
        <?php if(date("H")>0 and date("H")<=6){echo '早上好  ';}if(date("H")>6 and date("H")<12){echo '上午好  ';}
        if(date("H")>=12 and date("H")<18){echo '下午好  ';}if(date("H")>=18 and date("H")<24){echo '晚上好  ';}?>
        <span style="color: darkorange"> <?php session_start();echo ",".$_SESSION['user'];?></span></p>
    <img src="../image/WordArt.png" width="170" height="180" class="im">
    <div class="lianxi">

        <h5 style="color:#F00;box-shadow:1px 1px 2px 1px #8B1639">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们<hr><br><center><span style="color: #04569A">咨询电话:<img src="../image/phone.jpg" width="25px" height="25px"/></span><span style="color: black">0596-6288506</span><br><br><span style="color: #04569A">书记邮箱:<img src="../image/email.jpg" width="25px" height="25px"/></span><span style="color: black">sjxx@qztc.edu.cn</span><br><br><span style="color: #04569A">校长邮箱:<img src="../image/email1.jpg" width="25px" height="25px"/></span><span style="color: black">yzxx@qztc.edu.cn</span><br><br></center></h5>
        </div>
    <h5 style="color:#F00">教务处通知&nbsp;&nbsp;<span style="color: #999">> >MORE</span></h5>
    <ul>
        <li><span style=" font-size:13px;color:#F00">[英语四六级报名]</span>&nbsp;&nbsp;<a>四六级报名入口</a></li>
        <li><span style=" font-size:13px;color:#F00">[五一假期安排]</span>&nbsp;&nbsp;<a>补课放假通知</a></li>
        <li><span style=" font-size:13px;color:#F00">[重修补考名单]</span>&nbsp;&nbsp;<a>17-18学年补考通知</a></li>
        <li><span style=" font-size:13px;color:#F00">[考研信息]</span>&nbsp;&nbsp;<a>泉州师范学院硕士研究生复试录取工作办法</a></li>
        <li><span style=" font-size:13px;color:#F00">[学籍科]</span>&nbsp;&nbsp;<a>泉州师范学院毕业证明补办流程</a></li>
        <li><span style=" font-size:13px;color:#000">[主题活动]</span>&nbsp;&nbsp;<a>关于组织开展2019年"读懂中国"主题活动</a></li>
        <li><span style=" font-size:13px;color:#000">[就业活动]</span>&nbsp;&nbsp;<a>关于做好2019年届毕业生就业工作通知</a></li>
        <li><span style=" font-size:13px;color:#000">[创新创业]</span>&nbsp;&nbsp;<a>关于规范和加强贫困毕业生就业创业指导帮扶工作通知</a></li>
        <li><span style=" font-size:13px;color:#000">[校园周边]</span>&nbsp;&nbsp;<a>关于东海校区部分道路施工车辆通行的通告</a></li>
        <li><span style=" font-size:13px;color:#000">[教资考试]</span>&nbsp;&nbsp;<a>《2019上半年福建省中小学教师资格考试(笔试）公告》</a></li>
        <li><span style=" font-size:13px;color:#000">[60周年校庆]</span>&nbsp;&nbsp;<a>泉州师范学院关于启用60周年校庆标识通知</a></li>
    </ul>
    <h5 style="color:#F00">学校简介<span style="color: #999">> >MORE</span></h5>
    <p class="js"><img src="../image/xx.jpg" alt="软件学院" width="250" height="200" class="im1"/><br>&nbsp;&nbsp;&nbsp;泉州师范学院软件学院，是泉州师范学院十五个二级学院之一，创建于2003年4月，是全国首批五所“微软IT学院”之一，并成为Adobe中国授权认证培训中心、Autodesk授权认证培训中心（ATC）。自创办以来，软件学院坚持以服务为宗旨，以就业为导向的办学方针，秉承开放办学的理念，实行校企合作的办学模式，依托泉州师范学院的优质资源，走产学研用结合的办学之路，培养实用型、复合型高级专门人才。
        软件学院地处历史文化名城泉州市区，坐落于泉州江南高新科技信息产业园内，依山傍水，高标准花园式的新校舍，气派非凡。
        学院占地7.1万平方米，建筑面积5.4万平方米；拥有价值1500多万元的实验实训设备，并投资3000多万元在软件企业云集的厦门软件园二期建立了4500平方米的产学研中心和顶岗实训基地。</p>
</div>
</body>
</html>

