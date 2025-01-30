<?php 
$n = 5;
$a = 4;
$d = 6;

$progressiyaG = [];

for ($i = 0; $i < $n; $i++) { 
	
	$progressiyaG[] = ($a * $i * $d);
}
echo "Geometrik progressiyaning $n ta hadini hisoblash " . implode(", ", $progressiyaG);

 ?>