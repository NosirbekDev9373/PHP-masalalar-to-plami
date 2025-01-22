<?php 
$n = 12;
$k = 0;
$sum = 0;

while ($sum + ($k + 1) <= $n) {
	$k++;
	$sum += $k;
}
echo "K = $k<br>";
echo "K gacha bolgan sonlar yigindis $sum";





 ?>