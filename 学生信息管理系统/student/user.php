<?php
session_start();
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
$username=trim($_POST["name"]);
$password=trim($_POST["pwd"]);
$imgcode=strtolower($_POST["imgcode"]);
$myimagecode=strtolower($_SESSION["thisimagecode"]);
if ($imgcode!=$myimagecode){
    echo "<script>alert('请输入正确的验证码！');location.href='login.php'</script>";
    exit;
}
if(empty($_POST['imgcode'])){
    echo "<script>alert('请输入验证码！');location.href='login.php'</script>";
    exit;
}
if(!empty($_POST)){
    $_SESSION['user']=trim($_POST['name']);
}
$con=new mysqli('localhost','root','','us')or die('数据库连接失败！');
$con->query("set names 'utf8'");
$sql="select * from user where 学号='".$_POST['name']."'and user_pw='".$_POST['pwd']."'";
if(empty($_POST['name'])or empty($_POST['pwd'])){
    echo "<script>alert('用户名密码不能为空!');location.href='login.php'</script>";
}else{
$data=$con->query($sql);
if ($data ->num_rows>0){
    echo "<script>location.href='Frameset.html'</script>";
}else{
    echo "<script>alert('用户名或密码错误');location.href='login.php'</script>";
}}