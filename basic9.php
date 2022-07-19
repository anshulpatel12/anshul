<?php
$a= "PHP Tutorial anshul";
$a = preg_replace('/(\b[a-z])/i','<span style="color:Red;" >\1</span>',$a);
echo $a;
?>
