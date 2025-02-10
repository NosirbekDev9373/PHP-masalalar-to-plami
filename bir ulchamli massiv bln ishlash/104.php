<?php 
// 110
$massiv = [1, 2, 3, 4, 5, 6, 7, 8];
$n = count($massiv);
$newMassiv = [];

for ($i = 0; $i < $n; $i++) { 
	if ($massiv[$i] % 2 == 0) {
		$newMassiv[] = $massiv[$i];
	}
}

echo "<pre>";print_r(array_merge($massiv, $newMassiv)); echo "</pre>";


 ?>