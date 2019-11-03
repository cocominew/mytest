<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成绩查询</title>
    <style>
        table{
            margin: 0 auto;
        }
        table tr{
            background: #FFFFFF;
            height: 30px;
        }
        table tr:nth-child(even){
            background: #dddddd;
        }
        ul{
            list-style: none;
        }
        li{
            width: 800px;
            margin: 0 auto;
        }
        a{
            font-size: 15px;
            text-decoration: none;
            margin-right: 30px;
            color: black;
            float: right;
        }
    </style>
</head>
<body>
<table  cellspacing="0" cellpadding="0" width="800">
    <tr style="background:cornflowerblue"><td>学年</td><td>课程名称</td><td>学分</td><td>平时成绩</td><td>期末成绩</td><td>综合成绩</td></tr>
<?php
header("Content-type:text/html;charset=utf-8");
$conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
$conn ->query("set names 'utf8'");
session_start();
$xuehao=$_SESSION['user'];
    $sql="select 学年,课程名称,学分,平时成绩,期末成绩,综合成绩 from user where 学号='$xuehao'and 学年='2017-2018'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    for($i=0;$i<$num;$i++){
        $row=mysqli_fetch_assoc($result);
        $year=$row['学年'];
        $course=$row['课程名称'];
        $xuefen=$row['学分'];
        $pgrade=$row['平时成绩'];
        $qgrade=$row['期末成绩'];
        $zgrade=$row['综合成绩'];
        echo "<tr><td>$year</td><td>$course</td><td>$xuefen</td><td>$pgrade</td><td>$qgrade</td><td>$zgrade</td></tr>";
}
?>
</table>
<ul><li><a href='xxuenian.php'>下一学年</a><a href='sxuenian.php'>上一学年</a></li></ul>
</body>
</html>