<?php 
//musbat butun son berilgan, berilgan son uch honali toq son rostlikka tekshir

$a = 127;

$son = ((100 <= $a) && (999 >= $a) && (($a % 2) != 0));

if($son) {
	echo "Dastur rostlik qaytaradi<br>"; 
} else {
	echo "Dastur yolgon qaytaradi<br>";
}
var_dump($son);
 ?>