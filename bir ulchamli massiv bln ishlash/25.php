<?php 
$massiv = [3, 6, 12, 24, 48, 96];
$n = count($massiv);
if ($n < 2) {
	echo "0";
	exit;
}

$maxraj = $massiv[1] / $massiv[0];

for ($i = 1; $i < $n - 1; $i++) { 
	if ($massiv[$i + 1] / $massiv[$i] != $maxraj) {
		echo "0";
		exit;
	}
}
echo $maxraj;






 ?>