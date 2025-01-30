<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13, 3];
$n = count($massiv);
$toqIndeks = [];
for ($i = 1; $i <= $n; $i += 2) { 
	$toqIndeks[] = $massiv[$i]; 
}
sort($toqIndeks);

echo "Massivdagi toq indekslar (usish tartibida): ";
echo implode(", ", $toqIndeks) . "<br>";

$juftIndeks = [];  
for ($i = 0; $i <= $n; $i += 2) { 
	$juftIndeks[] = $massiv[$i];
}
rsort($juftIndeks);
echo "Massivdagi juft indekslar (kamayish tartibida): ";
echo implode(", ", $juftIndeks);
 ?>