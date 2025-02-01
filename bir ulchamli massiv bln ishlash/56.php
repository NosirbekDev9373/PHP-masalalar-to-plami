<?php 

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = count($a);
$b = [];

for ($i = 3; $i < $n; $i += 3) { 
    $b[] = $a[$i];  		
}
echo "B massiv elementlar soni: " . count($b) . "<br>";
echo "B massivimiz: " . implode(", ", $b);

 ?>