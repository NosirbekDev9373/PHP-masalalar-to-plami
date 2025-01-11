<?php 

$a = 34;
$b = 12;
$c = 12;
$d = 12;

if ($b == $c && $b == $d) {
	echo "1-son: $a";
} elseif ($c == $a && $c == $d) {
	echo "2-son: $b";
} elseif ($a == $b && $a == $d) {
	echo "3-son: $c";
} elseif ($b == $a && $b == $c) {
	echo "4-son: $d";
} else {
	echo "3 ta son uzaro teng emas";
}


 ?>