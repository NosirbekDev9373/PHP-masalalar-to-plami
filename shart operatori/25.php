<?php 
 
function F($x) {
	if ($x < -2 || $x > 2){
		return 2 * $x;
	}else {
		return (-3) * $x;
	}
}

$x = 10;
echo "F($x) = " . F($x);
	


 ?>