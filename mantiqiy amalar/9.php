<?php 
// a va b sonlarming faqat 1 tasi toq
$a = 6;
$b = 3;
$son = ((($a + $b) % 2) != 0);

if($son) {
	echo "Dastur rostlik qaytaradi"; 
} else {
	echo "Dastur yolgon qaytaradi";
}

 ?>