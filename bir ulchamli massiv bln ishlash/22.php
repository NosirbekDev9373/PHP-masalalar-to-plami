<?php 

$massiv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$n = count($massiv);
$k = 6;
$l = 12;
$yigindi1 = 0;
for ($i = 0; $i <= $k; $i++) { 
	$yigindi1 += $massiv[$i];
}
$yigindi2 = 0;
for ($i = $l; $i < $n; $i++) { 
	$yigindi2 += $massiv[$i];
}

echo "$k va $l indekslari orasidagi elementlardan tashqari elementlarning yigindisi: " . $yigindi1 + $yigindi2;

 ?>