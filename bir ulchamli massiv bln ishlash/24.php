<?php 
$massiv = [3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42];
$n = count($massiv);
if ($n < 2) {
	echo "0";
	exit;
}

$ayirma = $massiv[1] - $massiv[0];

for ($i = 1; $i < $n - 1; $i++) { 
	if ($massiv[$i + 1] - $massiv[$i] != $ayirma) {
		echo "0";
		exit;
	}
}
echo $ayirma;

 ?>