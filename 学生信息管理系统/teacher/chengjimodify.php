<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
$conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
$conn ->query("set names 'utf8'");
$sql="select * from user where 学号='".$_POST['id']."'";
$data=$conn->query($sql)or die("<br>访问数据失败!");
$sql="update user set 学年='".$_POST['year']."',学分='".$_POST['xuefen']."'
,综合成绩='".$_POST['zgrade']."',期末成绩='".$_POST['qgrade']."',平时成绩='".$_POST['pgrade']."'where 学号='".$_POST['id']."'and 课程名称='".$_POST['course']."'";

if($conn->query($sql)===true){
    die("学生成绩修改成功!");
}    else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();