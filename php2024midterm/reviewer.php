<?php 
session_start();
 ?>

<html>
<head>
    <meta charset="utf-8">
</head>

<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes2"){
        echo "<p style='font-size:25px;'>Reviewer您好，歡迎進入論文評論網頁</p>";
    }else{
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}

?>

<form action="showreview.php" method="get">

論文評審決定:
<input type="radio" name="sDecide" value="Accept" checked>Accept
<input type="radio" name="sDecide" value="Minor Revision">Minor Revision
<input type="radio" name="sDecide" value="Major Revision">Major Revision
<input type="radio" name="sDecide" value="Reject">Reject
<br/><br/>

論文評論評語:
<textarea name="sMytext" rows="20" cols="60">
</textarea><br/><br/>

<input type="submit" value="提交"><br/><br/>

<a href='logout.php'>登出</a>
 
</html>
