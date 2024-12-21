<?php 

$a = 8;
$b = 7;
$c = 3;

$T = $a * $b;
$K = $c * $c;

$natija = intdiv($T, $K);
$natija2 = $T % $K; 
echo "Kvadratlar sani = $natija<br>";
echo "Joylashmay qolgan qismi yuzasi = $natija2";
 ?>