<?php 
// n qiymati va a va b qiymatini kiritamiz
$n = 12;
$a = 12;
$b = 14;

// massivni yaratish

$massiv = []; 
$massiv[0] = $a;
$massiv[1] = $b;

// massivni qolgan elementlarini hisoblash
for ($i = 2; $i < $n; $i++) { 
	
	$massiv[$i] = $massiv[$i - 1] + $massiv[$i - 2];
}

echo "Hosil qilingan massiv: " . implode(", ", $massiv);
 ?>