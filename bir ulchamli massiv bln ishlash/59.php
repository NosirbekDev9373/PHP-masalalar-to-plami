<?php 
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = count($a);
$b = [];
$b[0] = $a[0];

for ($k = 1; $k < $n; $k++) { 
	$b[$k] = $a[$k - 1] + $a[$k] / $k;
}

print_r($b);
 ?>