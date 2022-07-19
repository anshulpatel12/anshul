<!DOCTYPE html>
<html>
<body>

<?php
// $array = array(1,2,3,4,5);
// echo $array[2];

?>
<!-- <br/>
<?php// $mixed=array(1,"aa","bb",array("x","y","z")); ?><br/>
<?php //echo $mixed[2]; ?><br/>
<?php //echo $mixed[3]; ?><br/>
<?php //echo $mixed; ?><br/>

<?php //echo $mixed[3][2]; ?><br/>
<?php //$mixed[2] = "cat" ?><br/>
<?php //$mixed[4] = "bat" ?><br/>
<?php //$mixed[] = "at" ?><br/>
<?php //$mixed[] = "t" ?><br/> -->



<!-- <pre> -->
<?php //echo print_r($mixed);?>
<!-- </pre> -->

<!-- Associative array  -->
<!-- key value pari  -->
<!-- <?php //$assoc = array("first_name"=>"aaaaa","last_name"=>"ababab");?>
<?php //echo $assoc["first_name"] ;?><br/>
<?php //echo $assoc["first_name"]." ".$assoc["last_name"] ;?><br/>

<?php //$assoc["first_name"] ="bababa" ;?><br/>
<?php // echo $assoc["first_name"]." ".$assoc["last_name"] ;?><br/>

<?php// $numbers=array(1,2,4,5,7,8);?><br/>
<?php //$numbers=array(0=>1,0=>2,2=>4,3=>5,4=>7,5=>8);?><br/>
<?php //echo  $numbers[0];?><br/> -->


<!-- Array functions  -->

<?php $numbers=array(1,2,4,100,5,7,8);?><br/>
count :<?php echo count($numbers);?><br/>
min :<?php echo min($numbers);?><br/>
max :<?php echo max($numbers);?><br/>
<br/>
<pre>
sort : <?php sort($numbers); print_r ($numbers);?><br/>
Reverse sort : <?php rsort($numbers); print_r ($numbers);?><br/>
</pre>

implode: <?php echo $num_string = implode(" * ", $numbers); ?><br/>
explode: <?php print_r(explode(" * ",$num_string));?><br/>
<br/>
5 in array: <?php echo in_array(5,$numbers) //give true false  ?><br/>
19 in array: <?php echo in_array(15,$numbers)?><br/>

</body>
</html>