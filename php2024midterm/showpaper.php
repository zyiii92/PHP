<?php 
session_start();
?>

<meta charset="utf-8">

<?php

$sID = $_GET["sID"];
$sName = $_GET["sName"];
$sEmail = $_GET["sEmail"];

echo "論文標題:",$sID,"<br/>";
echo "論文作者:",$sName,"<br/>";
echo "作者email:",$sEmail,"<br/>";

if(isset($_GET['shorttext']) && $_GET['shorttext']!='' ){
    $shorttext = htmlentities($_GET['shorttext']);
    echo $shorttext ;
}

ob_flush();

?>