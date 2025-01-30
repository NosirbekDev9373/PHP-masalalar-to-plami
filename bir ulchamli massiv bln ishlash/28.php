<?php 
$massiv = [9, 4, 5, 8, 12, 10, 15];
$n = count($massiv);
$min = $massiv[0];

for ($i = 2; $i < $n; $i += 2) { 
	if ($massiv[$i] < $min) {
		$min = $massiv[$i];
	}
}
echo "Juft indeksli elementlarning eng kichigi: " . $min;






 ?>