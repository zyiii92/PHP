<?php 
session_start();
 ?>

<html>
<meta charset="utf-8">

<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes1"){
        echo "登入chair成功<br/>";
        echo "<a href='logout.php'>登出</a>";
    }else{
        echo "非法偷渡客";
        echo "三秒後回登入畫面";
        header("Refresh:3;url=index.php");
    }
}else{
    echo "非法進入網頁";
    echo "三秒後回登入畫面";
    header("Refresh:60;url=index.php");
}

?>

</html>
