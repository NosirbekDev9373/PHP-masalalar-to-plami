<?php 
// 3 ta son berilgan uni rostlikka tekshirish, faqat 1 tasi musbat busin
$a = -4;
$b = -3; 
$c = 6;

$son = ($a * $b * $c) >= 0;

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}

 ?>