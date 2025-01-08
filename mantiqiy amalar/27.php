<?php 
// kordinatalari uqida (x y) nuqtalar kordinatanig 2-choragida yoki 3-choragida yotsin

$x = 5;
$y = 7;

if ($x < 0 && $y > 0) {
		echo "(x y) nuqtamiz kordinatamizning 2-chorakida yotadi.";
	} elseif($x < 0 && $y < 0) {
		echo "(x y) kordinatamizning 3-chorakda yotadi";
	} else {
		echo "ikkala kordinatada ham yotmaydi";
	}
 ?>