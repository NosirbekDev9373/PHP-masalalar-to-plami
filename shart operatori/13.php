<?php 
// 3 ta son berilgan urtanchasini aniqlash 
$a = 5;
$b = 6;
$c = 2;
 
if ($a > $b && $a < $c || $a < $b && $a > $c) {
	echo "$a urtancha son";
} elseif ($b > $a && $b < $c || $b < $a && $b > $c) {
	echo "$b urtancha son";
} elseif ($c > $a && $c < $b || $c < $a && $c > $b) {
	echo "$c urtancha son";
}

 ?>