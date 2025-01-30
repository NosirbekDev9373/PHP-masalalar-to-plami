<?php 
$massiv = [11, 14, 12, 15, 15, 16, 14, 18, 15, 19, 5];
$n = count($massiv);

$indekslar = [];
$soni = 0;

for ($i = 0; $i < $n - 1; $i++) { 
	if ($massiv[$i] > $massiv[$i + 1]) {
		$indekslar[] = $i;
		$soni++;
	}
}
sort($indekslar);

echo "Indekslar: " . implode(", ", $indekslar) . "<br>";
echo "Jami soni: " . $soni;



 ?>