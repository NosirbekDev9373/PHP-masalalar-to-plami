<?php 
// kordinatalari uqida (x y) nuqtalar kordinatanig 4-choragida yotsin

$x = 5;
$y = -7;

function natija($x, $y) {
	if ($x > 0 && $y < 0) {
		echo "(x y) nuqtamiz kordinatamizning 4-chorakida yotadi.";
	} else {
		echo "(x y) kordinatamizning 4-chorakda yotmaydi";
	}
}

echo natija($x, $y);

 ?>