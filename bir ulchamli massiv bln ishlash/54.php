<?php 
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = count($a);

$b = [];
for ($i = 2; $i < $n; $i += 2) { 
		$b[] = $a[$i];
	}

echo "B massiv elementlari soni: " . count($b) . "<br>";
echo "B massiv elementlari: " . implode(", ", $b);

 ?>