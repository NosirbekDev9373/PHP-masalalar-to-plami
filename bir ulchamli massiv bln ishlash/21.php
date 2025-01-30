<?php 

$massiv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$n = count($massiv);
$k = 6;
$l = 12;

$yigindi = 0;
$sonimiz = 0;
for ($i = $k; $i <= $l; $i++) { 
	$yigindi += $massiv[$i];
	$sonimiz += 1; 
}
echo "Massivning $k va $l elementlari urta arifmetigi " . $yigindi / $sonimiz;