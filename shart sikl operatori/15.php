<?php 
$avvalgiS = 500;
$p = 10;

$avvalgiS = $s;

$k = 0;

while ($s <= $avvalgiS * 2) {
	$s = $s + $s * $p / 100;
	$k += 1;
}
echo $k . '<br>';
echo $s ;


 ?>