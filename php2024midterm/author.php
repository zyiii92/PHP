<?php 
session_start();
 ?>

<html>
<head>
    <meta charset="utf-8">
</head>

<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes3"){
        echo "<p style='font-size:25px;'>Author您好，歡迎進入論文投稿網頁</p>";
    }else{
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}

?>

<form action="showpaper.php" method="get">

論文標題:</br>
<input type="text" name="sID" value=""><br/>
作者姓名:<input type="text" name="sName" value=""><br/>
作者Email:<input type="text" name="sEmail" value=""><br/><br/>
論文摘要:
<textarea name="shorttext" rows="20" cols="60">
</textarea><br/><br/>

<input type="submit" value="提交"><br/><br/>

<a href='logout.php'>登出</a>

</html>
