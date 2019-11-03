<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include "db.php";
$sql="select * from student where 学号='".$_POST['id']."'";
$data=$conn->query($sql)or die("<br>访问数据失败!");
$rec_count=$data->fetch_row();
if($rec_count>0){
    $sql="delete from student where 学号='".$_POST['id']."'";
    $data=$conn->query($sql)or die("<br>学生删除失败!");
    echo "<br>学生删除成功!";
}else{die("<br>该学生不存在!<a href='shanchu.html'>返回</a>");}
?>