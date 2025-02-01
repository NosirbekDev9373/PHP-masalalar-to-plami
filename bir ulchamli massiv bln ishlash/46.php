<?php 
$massiv = [10, 12, 20, 30, 50, 60, 80]; 
$n = count($massiv);
$R = 20;
$qushilma = $massiv[0] + $massiv[1];
$yaqinison = abs($R - $qushilma);

for ($i = 1; $i < $n - 1; $i++) { 
	if ($yaqinison > abs($R - ($massiv[$i] + $massiv[$i + 1]))) {
		
		$yaqinison = abs($R - ($massiv[$i] + $massiv[$i + 1]));
	}
}
echo $yaqinison;

?>