<?php 
$massiv = [10, 10, 10, 10, 70, 60, 50, 12, 32, 3, 42]; 
$n = count($massiv);

$harhillik = 0;
for ($i = 1; $i < $n; $i++) { 
	if ($massiv[$i] != $massiv[$i - 1]) {
		$harhillik++;
	}
}
echo "Massivdagi har xil qiymatli elementlar soni: " . $harhillik;
 ?>