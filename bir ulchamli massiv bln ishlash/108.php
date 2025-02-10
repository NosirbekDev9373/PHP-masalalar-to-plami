<?php 
// 116

function findServis($A) {
	$B = [];    // Seriya uzunligi
	$C = [];    // Seriyadagi asosiy qiymatlar

	$n = count($A);
	$count = 1;    // Seriya uzunligini hisoblash uchun 

	for ($i = 1; $i < $n; $i++) { 
		if ($A[$i] == $A[$i - 1]) {
			$count++; // oldingi element bn teng busa uzaytiramiz
		} else {
			$B[] = $count;    // seriya uzunligini B massivga qushamiz
			$C[] = $A[$i - 1]; // Seryani asosiy qiymatini C massivga qushamz
			$count = 1; // yangi seryani yana boshidan boshlaymiz
		}
	}
	// oxirgi seryani qushamiz
	$B[] = $count;
	$C[] = $A[$n - 1];

	return [$B, $C];
}
 // misol uchun massiv
$A = [2, 2, 2, 3, 3, 4, 4, 4, 4, 5, 5, 2];
list($B, $C) = findServis($A);

echo "B massiv (Serya uzunligi): "; echo "<pre>"; print_r($B); echo "</pre>";
echo "C massiv (Seriya qiymati): "; echo "<pre>"; print_r($C); echo "</pre>";




 ?>