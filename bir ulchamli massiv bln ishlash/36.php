<?php 
$massiv = [11, 14, 12, 15, 15, 16, 14, 18, 15, 19, 5];
$n = count($massiv);

$indekslar = [];

for ($i = 1; $i < $n - 1; $i++) { 
	if ($massiv[$i - 1] > $massiv[$i] && $massiv[$i] < $massiv[$i + 1] || $massiv[$i - 1] < $massiv[$i] && $massiv[$i] > $massiv[$i + 1]) {
		$indekslar[] = $i;
	}
}
echo max($indekslar);


 ?>