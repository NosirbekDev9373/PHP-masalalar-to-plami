<?php 

$n = 123;
$sum = 0;
$i = 0;
while ($n != 0) { 
	$oxirgison = $n % 10;     // 3
	$i = $oxirgison;
	$sum += $oxirgison;
	$n = floor($n / 10);      // 12
	echo $sum . ',' ;
}
echo '<br>' . $sum;