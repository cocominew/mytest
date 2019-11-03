<?php
$psw=isset($_POST['teacher_psw'])?$_POST['teacher_psw']:"";
$con=new mysqli('localhost','root','','us')or die('数据库连接失败！');
$con->query("set names 'utf8'");
$sql="select * from teacher_psw where psw='".$_POST['teacher_psw']."'";
if(empty($_POST['teacher_psw'])){
    echo "<script>alert('密码不能为空!');window.history.back(-1);</script>";
}else{
    $data=$con->query($sql);
    if ($data ->num_rows>0){
        echo "<script>location.href='Frame.php'</script>";
    }else{
        echo "<script>alert('请输入正确管理员密码');window.history.back(-1);</script>";
    }
}
?>