<?php 
$a = [10, 20, 30, 40, 50, 60, 70, 80, 90];
$k = 1;
$h = 6;

$left = $k + 1;
$right = $h - 1;

while ($left < $right) {
	list($a[$left], $a[$right])	= [$a[$right], $a[$left]];
	$left++;
	$right--;
}
print_r($a);
 ?>