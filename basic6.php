<?php
echo "your agent name is :".$_SERVER['HTTP_USER_AGENT'];
echo "</br>";
echo "your file name is :" .basename($_SERVER['PHP_SELF']);
?>