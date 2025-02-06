<?php 
$a = [10, 20, 30, 40, 50, 60, 70, 80, 90];
$k = 1;
$h = 6;
// utyadagi qismini teskari qilsak 
while ($k < $h) {
	list($a[$k], $a[$h]) = [$a[$h], $a[$k]];
	$k++;
	$h--;	
}
print_r($a);

 ?>