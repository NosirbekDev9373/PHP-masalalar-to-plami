<?php 

$massiv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$n = count($massiv);
$k = 6;
$l = 12;
$yigindi1 = 0;
$son1 = 0;
for ($i = 0; $i <= $k; $i++) { 
	$yigindi1 += $massiv[$i];
	$son1 += 1;
}
$yigindi2 = 0;
$son2 = 0;
for ($i = $l; $i < $n; $i++) { 
	$yigindi2 += $massiv[$i];
	$son2 += 1;
}

echo "$k va $l indekslari orasidagi elementlardan tashqari elementlarning urta arifmetigi: " . ($yigindi1 + $yigindi2) / ($son1 + $son2);

 ?>