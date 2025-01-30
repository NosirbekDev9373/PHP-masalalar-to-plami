<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13, 12];
$n = count($massiv);
$k = 3;
$l = 10;

if ($k <= 0 || $k > $n) {
	echo "k sonimiz Massiv indeksi orasida bulishi kerak";
}

if ($l < $k && $l < 0 || $l > $n) {
	echo "L qiymat qanoatlantirmaydi";
}

$yigindi = 0;
for ($i = $k; $i <= $l; $i++) { 
	$yigindi += $massiv[$i];
}

echo "Massivning $k va $l elementlar yigindisi " . $yigindi;
 ?>