<?php 

$massiv = [9, 45, 8, 14, 7, 5, 12, 8];
$n = count($massiv);
if ($n % 2 !== 0) {
	echo "MAssiv elementlari  juft son bolishi kerak";
	exit;
}
$half = $n / 2;

for ($i = 0; $i < $half; $i++) { 
	list($massiv[$i], $massiv[$i + $half]) = [$massiv[$i + $half], $massiv[$i]];
}
print_r($massiv);



 ?>