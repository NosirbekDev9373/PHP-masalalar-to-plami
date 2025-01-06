<?php 
// a , b , c sonlar berilgan musbat son qaytaradi 

$a = 4;
$b = -3; 
$c = -4;

$son = (0 <= $a && 0 <= $b && 0 <= $c);

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}

 ?>