<?php
date_default_timezone_set('Asia/Shanghai');
$conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
$conn ->query("set names 'utf8'");
if(isset($_POST['submit'])){
    $time=date("Y-m-d H:i");
    $uImg=$_FILES["uImag"];
    $ext=explode(".",$uImg['name']);
    $extName=end($ext);
    if($extName!="jpg" && $extName!="gif" && $extName!="png"){
        echo "<script>alert('文件类型不对!');location.href='liuyan.php'</script>";
        exit;
    }
    if($uImg["size"]>2000000){
        echo "<script>alert('文件太大了!最多上传2M');location.href='liuyan.php'</script>";
        exit;
    }
    $dir="upload/";    $fileName=time().rand(10000,99999).".".$extName;   $uploadUrl=$dir.$fileName;
    move_uploaded_file($_FILES['uImag']['tmp_name'],$uploadUrl);
    $sql="insert into message(username,留言,时间,touxiang)values ('".$_POST['username']."',"."'".$_POST['content']."',"."'".$time."','".$uploadUrl."')";
    $data=$conn->query($sql);
    if($data){
        echo ("<div align='center'>已收到你的留言。谢谢!<br></div>");
        echo "<div align='center'><a href='liuyan.php'>返回继续留言</a><br>(5秒后将自动跳转到留言板,如果没有跳转可以直接点击此链接)</a><br></div>";
        header("refresh:5;url='liuyan.php'");
    }else{
        echo "<div align='center'>对不起,....能重新再试一遍吗?</div>";
        echo "<div align='center'>Error:".$sql."<br></div>".$conn->error;
        header("refresh:5;url='liuyan.php'");
    }
}

?>