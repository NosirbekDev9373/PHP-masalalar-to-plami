<?php 
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = count($a);
$b = [];
$b[$n - 1] = $a[$n - 1];

for ($k = $n - 2; $k >= 0; $k--) { 
	$b[$k] = $b[$k +1] + $a[$k];
}
echo "B massivi: ";
print_r($b);

 ?>