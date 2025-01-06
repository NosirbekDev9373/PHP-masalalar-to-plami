<?php 
// a va b sonlarming  ikkalasi ham juft va toq sonlar bulsin

$a = 25;
$b = 4;

$son = ((($a + $b) % 2) == 0);

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}  

 ?>