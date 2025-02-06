<?php 
$massiv = [9, 45, 8, 14, 7, 5, 12];
$n = count($massiv);

$minIndex = 0;
$maxIndex = 0;

for ($i = 1; $i < $n; $i++) { 
	if ($massiv[$i] < $massiv[$minIndex]) {
		$minIndex = $i;
	}
	if ($massiv[$i] > $massiv[$maxIndex]) {
		$maxIndex = $i;
	}
}
$almashtirish = $massiv[$minIndex];
$massiv[$minIndex] = $massiv[$maxIndex];
$massiv[$maxIndex] = $almashtirish;

print_r($massiv);
 ?>