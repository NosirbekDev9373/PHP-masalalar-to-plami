<?php 
$massiv = [9, 18, 5, 8, 12, 10, 15];
$n = count($massiv);
$max = $massiv[1];

for ($i = 3; $i < $n; $i += 2) { 
	if ($massiv[$i] > $max) {
		$max = $massiv[$i];
	}
}
echo "toq indeksli elementlarning eng kattasi: " . $max;




 ?>