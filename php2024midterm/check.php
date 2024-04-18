<?php
session_start();
?>

<meta charset="utf-8">
<?php

//GET透過網址傳值 較好控制值

$uID="chair";
$uPassword="123";

$tID="reviewer";
$tPassword="234";

$pID="author";
$pPassword="345";

$sID = $_GET["sID"];
$sPassword = $_GET["sPassword"];


if($sID==$uID && $sPassword==$uPassword){
    $_SESSION["check"]="Yes1";
    header("Location:chair.php");

}else if($sID==$tID && $sPassword==$tPassword){
    $_SESSION["check"]="Yes2";
    header("Location:reviewer.php");

}else if($sID==$pID && $pPassword==$pPassword){
    $_SESSION["check"]="Yes3";
    header("Location:author.php");

}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

ob_flush();

echo $uID." ".$uPassword;

?>