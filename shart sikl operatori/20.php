<?php 

$n = 22;
$sum = 0;
$i = 0;
while ($n != 0) { 
	$oxirgison = $n % 10; // 3
	$sum += $oxirgison;
	$n = floor($n / 10);  // 12
	if ($oxirgison == 2) {
		echo "xa bor";
	} else {
		echo "yoq";
	}break;


}