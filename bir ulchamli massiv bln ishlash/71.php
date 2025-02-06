<?php 
$massiv = [1, 2, 3, 4, 5, 6, 7]; 
$n = count($massiv);

$half = floor($n / 2);

for ($i = 0; $i < $half; $i++) { 
	list($massiv[$i], $massiv[$n - $i - 1]) = [$massiv[$n -$i - 1], $massiv[$i]];			
}

print_r($massiv);

 ?>