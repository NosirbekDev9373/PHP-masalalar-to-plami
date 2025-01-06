<?php 
//musbat butun son berilgan, berilgan son 2 honali juft son
$a = 62;

$son = (10 <= $a && 99 >= $a) && (($a % 2) == 0);

if($son) {
	echo "Dastur rostlik qaytaradi<br>"; 
} else {
	echo "sonimiz 2 honalik son emas yoki toq son<br>";
}
var_dump($son);
 ?>