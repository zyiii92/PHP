<?php 
session_start();
?>

<meta charset="utf-8">

<?php

if(isset($_GET['sDecide']) && $_GET['sDecide']!='' ){
    $sDecide = htmlentities($_GET['sDecide']);
    echo $sDecide,"</br>" ;
}
if( isset($_GET['sMytext']) && $_GET['sMytext']!='' ){
    $sMytext = htmlentities($_GET['sMytext']);
    echo $sMytext ;
}

ob_flush();

?>
