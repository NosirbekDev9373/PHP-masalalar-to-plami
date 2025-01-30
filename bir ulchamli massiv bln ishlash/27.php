<?php 

$massiv = [3, -4, 5, -8, 12, -10, 15];
$n = count($massiv);

for ($i = 1; $i < $n; $i++) { 
	if (($massiv[$i - 1] * $massiv[$i]) > 0) {
		echo $i;
		exit;
	}
}
echo "0";


 ?>