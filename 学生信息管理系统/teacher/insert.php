<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include "db.php";
$sql="select * from student where 学号='".$_POST['id']."'";
$data=$conn->query($sql)or die("<br>访问数据失败!");
$rec_count=$data->fetch_row();
if($rec_count>0){
    die("<div align='center'>该学生已经存在!<a href='register.html'>返回</a></div>");
}else{
    $sql="insert into student(学号,姓名,性别,班级,身份证号码,手机号码,家庭电话,家庭地址,电子邮箱,备注)
values('".$_POST['id']."',"."'".$_POST['name']."',"."'".$_POST['gender']."',"."'".$_POST['class']."',"."'".$_POST['cer_id']."'
,"."'".$_POST['phone']."',"."'".$_POST['telephone']."',"."'".$_POST['address']."',"."'".$_POST['email']."',"."'".$_POST['remark']."')";
    $data=$conn->query($sql)or die("<br>学生添加失败!");
    print "学生添加成功!";
}
?>