<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言</title>
    <style>
        .wrap{
            margin: 0 auto;
            width:600px;
        }
        .btn{
            color: #FFFFFF;
            background-color: #00bee7;
            border-radius: 5px;
         }
        a{
            background-color: #00bee7;
            border-radius: 5px;
            color: #0000CC;
            text-decoration: none;
        }
        .show{
            border: 1px solid darkgray;
            width: 600px;height:100px;
            margin-top: 15px;
        }
        h5{
            float: right;
            color: #371002;
        }
    </style>
    <script language="JavaScript">
        function send() {
            document.form1.action="ly.php";
            document.form1.submit();
        }
    </script>
</head>
<body>
<div class="wrap">
<?php
session_start();
$log='log.txt';
if(!$handle=fopen($log,"a+")){echo '日志文件打开失败';exit();}
if (!fwrite($handle,session_id().chr(13))){echo '写入数据失败';exit();}
fclose($handle);$file=file_get_contents($log);
$content=explode(chr(13),$file);echo"<center>"."欢迎来到留言板……本页被访问次数:<b>".(count($content)-1)."</b>"."</center>"
?>
<form action="" method="post" name="form1" enctype="multipart/form-data">
    <br>
    <center>
       <textarea rows="10" cols="50" placeholder="请在此输入留言，说点什么" name="content" style="border: 1px solid darkgray"></textarea><br>
        <p><input type="text" name="username" placeholder="请在此输入留言人" style="width: 62%; border: 1px solid darkgray"></p>
        <p>头像:&nbsp;<input type="file" name="uImag" size="80"/></p>
  <input type="submit" name="submit" class="btn" onclick="send();"/>&nbsp;&nbsp;<input type="reset" class="btn"/></center>
    <?php
    date_default_timezone_set('Asia/Shanghai');
    $conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
    $conn ->query("set names 'utf8'");
    $sql="select * from message";   $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)){
        $ima=$row['touxiang'];
       ?>
    <div class="show">
        <div style="width: 80px;height: 100px;float: left;margin-right: 25px"><?php echo "<img src='{$ima}'/>";?></div>
        <p style="color:#371002"><?php echo $row['留言'];?></p><h5><?php echo $row['username'];?>&nbsp;&nbsp;<small><?php echo $row['时间']?>&nbsp;<a href="delectly.php?id=<?php echo $row['id']?>">删除</a>&nbsp;</small></h5>
   </div>
    <?php }?>
</form>
</div>

</body>
</html>
