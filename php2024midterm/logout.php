<meta charset="utf-8">

<?php

echo "登出成功";
echo "<br/>";
echo "三秒後回登入頁";

header("Refresh:3;url=index.php");

?>