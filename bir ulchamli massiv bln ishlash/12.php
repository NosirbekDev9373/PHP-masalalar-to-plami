<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65];
$k = 2;
$n = count($massiv);

for ($i = 0; $i < $n; $i += $k) { 
	echo $massiv[$i] . ", ";
}


 ?>