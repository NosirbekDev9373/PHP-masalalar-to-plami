<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13];

$n = count($massiv);

for ($i = $n - 1; $i > 0; $i -= 2) { 
	echo $massiv[$i] . ", ";
}