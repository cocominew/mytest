<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>学生登录界面</title>
    <style type="text/css">
        *{	font-family:"微软雅黑";
            font-size:14px;
            text-decoration:none;
            margin:0px;
            padding:0px;
        }
        @-webkit-keyframes rotate{0%{-webkit-transform:rotateZ(-45deg)}100%{-webkit-transform:rotateZ(315deg)}}
        body{background-image: url(../image/school.jpg);}
        #login {
            text-align: center;
            margin-top: 35px;
            margin-left: 850px;
            border:2px solid #da2127;
            height:550px;
            width:380px;
            position: relative;
        }
        #login #tou {
            height: 100px;
            width: 100px;
            overflow: hidden;
            border:1px solid rgba( 255,255,255,0.4);
            border-radius:50%;
            margin:0 auto;
            margin-top:20px;
        }
        #login h1 {
            color: #da2127;
            padding-top:20px;
            font-size:25px;
        }
        #tou img{
            height: 100px;
            width: 100px;
        }
        #login #tou_bg {
            height: 100px;
            width: 100px;
            overflow: hidden;
            position: absolute;
            margin: 0 auto;
            border: 1px solid #da2127;
            left: 140px;
            top: 21px;
            -webkit-animation:rotate 16s linear 0s infinite;
            animation:rotate 16s linear 0s infinite;
        }
        #tou_bg img{
            height:100px;
            width:100px;
        }
        #login input {
            background-color:rgba(255,255,255,0.2);
            display: block;
            height: 40px;
            width: 220px;
            margin-right: auto;
            margin-left: auto;
            border: 1px solid rgba(255,255,255,0.6);
            margin-top: 5px;
            text-indent:5px;
            line-height:14px;
            color: #600;
        }
        #login a {
            font-size: 12px;
            line-height: 28px;
            color: #FFFFFF;
            background-color: darkslateblue;
            height: 30px;
            width: 200px;
            margin-top: 30px;
            margin-right: auto;
            margin-left: auto;
            display: block;
            border-radius:5px;
        }
        #login input:focus {
            background-color: rgba(255,255,153,1);
            border:1px solid rgba(0,102,0,0.4);
            color:#F6C;
        }
        .text{
            -webkit-transform:translateY(80px);
        }
        #login h4{
            font-family: 幼圆;
            color: darkgray;
        }
    </style>
</head>
<body>
<div id="login">
    <form action="user.php" method="post" name="form1" >
    <div id="tou_bg"><img src="../image/02.png" /></div>
    <div id="tou"><img src="../image/03.jpg"/></div>
    <h1 id="info">Welcome</h1><br><h4 id="tip">温馨提示:用户名为学号,密码是身份证后六位</h4><br>
    <input name="name" type="text" placeholder="请输入用户名:" />
    <input name="pwd" type="password" placeholder="请输入密码:" />
    <input type="text" name="imgcode"  placeholder="请输入验证码:"><br>
    <img src="code.php" width="200px" height="30px" id="yan" >
    <a href="" id="change">看不清楚,换一张!</a>
    <br>
    <input type="submit" value="登录" id="button">
</div>
<script src="jquery.js"></script>
<script>
    $("#button").click(function()
        {
            $("input").fadeOut(500);
            $("#button").fadeOut(500);
            $("#yan").fadeOut(500);
            $("#change").fadeOut(500);
            $("#tip").fadeOut(500);
            $("#info").addClass("text");
        }
    )
</script>
</form>
</body>
</html>


