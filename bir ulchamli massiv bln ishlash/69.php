<?php 
$massiv = [9, 45, 8, 14, 7, 5, 12, 8];
$n = count($massiv);
if ($n % 2 !== 0) {
	echo "MAssiv elementlari  juft son bolishi kerak";
	exit;
}

$almashtirish = $massiv[0];
$massiv[0] = $massiv[1];
$massiv[1] = $almashtirish;
$almashtirish2 = $massiv[2];
$massiv[2] = $massiv[3];
$massiv[3] = $almashtirish2;

print_r($massiv);




 ?>