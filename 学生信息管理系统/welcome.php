<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>泉师软院欢迎您</title>
    <script type="text/javascript">
        function show_psw() {
            document.getElementById('div_psw').style.display="block";
        }
        function hidd_psw() {
            document.getElementById('div_psw').style.display="none";
        }
        function get_psw() {
            var psw=document.theForm.teacher_psw.value;
            if(psw.length>0){
                document.getElementById('div_psw').style.display="none";
            }else {
                alert('请输入密码');
                return false;
            }
            return true;
        }
    </script>
    <style type="text/css">
        body{ margin:0;
            padding:0;
        }
        .wrap {
            height: 520px;
            width: 630px;
            margin: 5px auto;
            border-bottom-style: dotted;
            border-bottom-color: #369;
        }
        ul {
            margin: 0px;
            padding:0px;
            list-style-type: none;
        }
        .wrap img {
            height: 100%;
            width: 100%;
        }
        .wrap li {
            transition:1s;
            height: 150px;
            width: 200px;
            float: left;
            margin:5px;
        }
        .wrap:hover li:not(:hover){
            opacity:0.7;
            filter:blur(3px) grayscale(1);
        }
        .biaoqian li {
            float: left;
            margin:22px 120px;
        }
        .biaoqian li a {
            display:block;
            font-family: "微软雅黑";
            font-size: 14px;
            color: #600;
            text-decoration: none;
        }
        .biaoqian {
            margin:0 auto;
            height:80px;
            width:630px;
        }
       .biaoqian input {
            background-color:rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.6);
            text-indent:5px;
            line-height:14px;
            color: #600;
           cursor: pointer;
        }
        #div_psw{
            position: absolute;
            display: none;
            border: 2px solid crimson;
            left: 80px;
            top: 300px;
        }
        #div_psw input{
            border: 1px solid darkslateblue;
            text-indent:5px;
        }
    </style>
</head>

<body>
<div class="wrap">
    <marquee onmouseout="this.start()" onmouseover="this.stop()"><font color="#CC0066" size="+3">Welcome~</font></marquee>
    <ul>
        <li><img src="image/IMG_1219.png" ></li>
        <li><img src="image/IMG_1218.png" ></li>
        <li><img src="image/IMG_1217.png" ></li>
        <li><img src="image/IMG_1216.png" ></li>
        <li><img src="image/IMG_1215.JPG" ></li>
        <li><img src="image/IMG_1214.JPG" ></li>
        <li><img src="image/IMG_1212.JPG" ></li>
        <li><img src="image/IMG_1211.png" ></li>
        <li><img src="image/IMG_1213.JPG"></li>
    </ul>
</div>
<div class="biaoqian">
    <ul>
        <li><input type="button" value="教师入口" onclick="show_psw()"/></li>
        <li><a href="student/login.php">学生入口</a></li>
        <div id="div_psw">
            <form action="teacher/teacher.php" method="post" onsubmit="return get_psw()">
                请输入密码:<input type="password" name="teacher_psw"/><br/><br/>
               <center> <input type="submit" value="确定"/>&nbsp;&nbsp;
                <input type="button" value="返回" onclick="hidd_psw()"/></center>
            </form>
        </div>
</div>
</body>
</html>