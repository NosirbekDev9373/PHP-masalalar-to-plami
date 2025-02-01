<?php 
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$n = count($a);
$b = [];

for ($i = 1; $i < $n; $i += 2) { 
    $b[] = $a[$i];  		
}
echo "B massiv elementlar soni: " . count($b) . "<br>";
echo "B massivimiz: " . implode(", ", $b);	 

 ?>