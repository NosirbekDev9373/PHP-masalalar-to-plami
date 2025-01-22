<?php 
$n = 11;
$i = 2;
$natija = true;

while ($i * $i <= $n) {
	
	if ($n % $i == 0) {
		$natija = false;
		break;
	}
	$i++;
}
    if ($natija) {
    	echo "$n soni tub";
    } else {
    	echo "$n son tub emas";
    }





 ?>