<?php 
// murakkab funksiya

$a1 = 2;
$a2 = 4;
$b1 = 1;
$b2 = 6;
$c1 = 5;
$c2 = 3;

$d = ($a1 * $b2 - $a2 * $b1);

$x = ($c1 * $b2 - $c2 * $b1) / $d;

$y = ($a1 * $c2 - $a2 * $c1) / $d;

$c1 = $x * $a1 + $b1 * $y;

$c2 = $a2 * $x + $b2 * $y;

echo "D = $d" . "<br>" . "X = $x" . "<br>" . "Y = $y"; 


 ?>