<?php 

$n = 7;

$ikkiningdarajasi = [];
for ($i = 0; $i <= $n; $i++) { 
	
	$ikkiningdarajasi[] = pow(2, $i);
}

echo "2 sonining $n ta darajasi " . implode(", ", $ikkiningdarajasi);
 ?>