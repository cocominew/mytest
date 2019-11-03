<?php
$id=$_GET['id'];
date_default_timezone_set('Asia/Shanghai');
$conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
$conn ->query("set names 'utf8'");
$sql="delete from message where id='$id'";
$result=mysqli_query($conn,$sql);
if($result==true){
    header("Location:liuyan.php");
}else{
    echo "<script>alert('留言删除失败');location.href='liuyan.php'</script>";
}
?>