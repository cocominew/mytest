<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
$conn=new mysqli("localhost","root","","us");
$conn ->query("set names 'utf8'");
if($conn->connect_error){
    die("连接失败:".$conn->connect_error);
}
    $sql = "insert into user(学号,姓名,学年,课程名称,学分,综合成绩,期末成绩,平时成绩)
values('".$_POST['id']."',"."'".$_POST['name']."',"."'".$_POST['year']."',"."'".$_POST['course']."',"."'".$_POST['xuefen']."'
,"."'".$_POST['zgrade']."',"."'".$_POST['qgrade']."',"."'".$_POST['pgrade']."')";
if($conn->query($sql)===true){
    echo "<script>alert('学生成绩录入成功,确认后自动返回继续录入');window.history.back(-1)</script>";
}    else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>
