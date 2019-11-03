<?php
header("Content-type:text/html;charset=utf-8");
$conn=new mysqli("localhost","root","","us")or die("数据库连接失败!");
$conn ->query("set names 'utf8'");
$rec_count=0;

function find_id(){
    global $conn,$rec_count;
    if(empty($_POST["id"]))
        die("<br><script>alert('学号不能空，请输入！');window.history.back();</script>");
    else{
        $cmd="select * from student where 学号='".$_POST["id"]."'";
        $data=$conn->query($cmd) or die ("<br>数据访问失败！");
        $rec_count=$data->fetch_row();
    }
}
function show_table($sql){
    global $conn;
    $i=0;
    $data=$conn->query($sql) or die ("<br> 连接表格错误!<br>");
    if(($num=$data->num_rows) > 0)
    {
        echo '<br>';echo '<br>';echo '<br>';
        echo  '<table width="850" border="1" align="center" cellpadding="0" cellspacing="0" >  ';
        echo  '<caption>'.'学生信息表'.' </caption>';

        if($arr1=$data->fetch_assoc())
        {
            echo  '<tr >';
            foreach($arr1 as $key=>$value)
                echo '<th align="center">'.$key.'</th> ';
            echo '<tr>';

            while($data->data_seek($i++)){
                $arr2=$data->fetch_assoc();
                echo '<tr>';
                foreach($arr2 as $value)
                    echo '<td align="center">'.$value.'</td> ';
                echo '<tr>';
            }
        }
        echo '</table>';
        echo "<center><br>共找到".$num."行记录。</center>";
    }
    else
        echo "<script language='javascript'>alert('没有找到学生记录！');location.href=cchengjichaxun.htmln.html</script>";
}
