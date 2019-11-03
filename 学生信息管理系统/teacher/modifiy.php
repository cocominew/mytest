<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include "db.php";
$sql="select * from student where 学号='".$_POST['id']."'";
$data=$conn->query($sql)or die("<br>访问数据失败!");
$rec_count=$data->fetch_row();
if($rec_count<=0){
    die("<div align='center'>该学生不存在!<a href='register.html'>添加该学生</a></div>");
}else{
    $sql="update student set 姓名='".$_POST['name']."',性别='".$_POST['gender']."',班级='".$_POST['class']."',身份证号码='".$_POST['cer_id']."'
,手机号码='".$_POST['phone']."',家庭电话='".$_POST['telephone']."',家庭地址='".$_POST['address']."',电子邮箱='".$_POST['email']."',备注='".$_POST['remark']."'where 学号='".$_POST['id']."'";
    $data=$conn->query($sql)or die("<div align='center'>学生修改失败!</div>");
    print "学生修改成功!";
}
?>