<?php 

$n = 12;
$k = 0;
$i = 1;
$s = 0;
while ($n >= $k) {
	$k = $i * $i;
	$i++;
	$s += 1;
}
echo $k . '<br>';
echo $s;




 ?>