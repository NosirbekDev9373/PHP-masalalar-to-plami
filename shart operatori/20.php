<?php 
// sonlar uqida 3ta son berilgan eng yaqini top

$a = -42;
$b = 42;
$c = 6;
    
$natija = abs($a - $b);
$natija1 = abs($a - $c);
$son = $a + $b;
$son1 = $a + $c;

if ($son < $son1) {
	echo "B son: $b va orassidagi masofa $natija ";
} elseif ($son > $son1) {
	echo "C son: $c va orassidagi masofa $natija1 ";
}


 ?>