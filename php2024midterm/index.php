<?php
session_start();
$setResult=setcookie("TestCookie","歡迎回來",time()+604800);
?>

<html>
<head>
    <meta charset="utf8">
</head>

<form id="L" method="post">
請選擇您的角色:<select name="part">
    <option value="Chair">Chair</option>
    <option value="Reviewer">Reviewer</option>
    <option value="Author">Author</option>
</select>
</form>

<?php
if(isset($_POST['Language'])) {
  echo "Selected Language: ".htmlspecialchars($_POST['Language']);
}
?>

<form action="check.php" method="get">

帳號:<input type="text" name="sID" value="" placeholder="Please login">
<br/>
密碼:<input type="password" name="sPassword" required>
<br/><br/>
<input type="submit" value="提交">
<br/><br/>

</form>

<?php

if($setResult){
    if(isset($_COOKIE["TestCookie"])){
        echo "Chair".$_COOKIE["TestCookie"];
    }else{
        echo "第一次來到網頁";
    }
}

?>

</html>