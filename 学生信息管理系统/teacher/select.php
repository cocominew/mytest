<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
if(empty($_POST["id"]) and empty($_POST["name"]) and empty($_POST["class"]))
    die("<br><script>alert('请输入查询条件！');window.history.back();</script>");
else{
    include "db.php";

    $cmd="select * from student where ";

    if(!empty($_POST["id"])){
        $cmd.=" 学号='".$_POST["id"]."'";
        if(!empty($_POST["name"]))
            $cmd.=" and 姓名='".$_POST["name"]."'";
        if(!empty($_POST["class"]))
            $cmd.=" and 班级='".$_POST["class"]."'";
    }
    else{

        if(!empty($_POST["name"])){
            $cmd.=" 姓名='".$_POST["name"]."'";
            if(!empty($_POST["class"]))
                $cmd.=" and 班级='".$_POST["class"]."'";
        }
        else
            $cmd.=" 班级='".$_POST["class"]."'";
    }
    $data=$conn->query($cmd)or die("<br>访问数据失败!");
    $rec_count=$data->fetch_row();

        show_table($cmd);
        die();

}

?>