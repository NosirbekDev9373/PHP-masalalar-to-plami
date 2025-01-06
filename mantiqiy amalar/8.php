<?php 
// a va b sonlar toq sonlar jumlani rostlikka tekshirish

$a = 4;
$b = 5;

$son = (($a % 2) != 0)  && (($b % 2) != 0);

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}
 ?>
