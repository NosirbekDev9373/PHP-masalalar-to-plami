<?php 
// 3 ta son berilgan uni rostlikka tekshirish hech bumaganda 1 tasi musbat busin
$a = 4;
$b = 3; 
$c = 1;

$son = (( 0 >= $a || 0 <= $a) && (0 >= $b || 0 <= $b) && (0 >= $c || 0 <= $c));

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}

 ?>