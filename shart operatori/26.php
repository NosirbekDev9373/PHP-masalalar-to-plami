<?php 

function F($x) {
	if ($x <= 0) {
		return -$x;
	} elseif ($x > 0 && $x < 2) {
		return $x * $x;
	} elseif ($x >= 2) {
		return 4 ;
	}
}

$x = -12;

echo "F($x) = " . F($x);


 ?>