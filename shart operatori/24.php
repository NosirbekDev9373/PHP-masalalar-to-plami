<?php
// FUNKSIYALI MISOLLAR

function F($x) {
	if ($x > 0) {
		return 2 * sin($x);
	}elseif ($x <= 0) {
		return ($x - 6);
	}
 }

 // x ga qiymat beramziz
 $x = 90;
echo "F($x) = " . F($x);

 ?>