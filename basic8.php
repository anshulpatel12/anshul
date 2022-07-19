<?php
$url ='http://localhost/phppractice/basic8.php';

$url = parse_url($url);

echo 'scheme:'. $url['scheme'];
echo "<br>";
echo 'Host:' . $url['host'];
echo "<br>";
echo 'Path:' . $url['path'];
?>
