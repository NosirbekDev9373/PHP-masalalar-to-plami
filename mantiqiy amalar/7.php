<?php 
// shartimiz A < B < C shuni rostlikka tekshiramiz
$a = 5;
$b = 6; 
$c = 7;


 $son = ($a < $b) && ($b < $c);


if($son) {
	echo "dastur ishda true qaytaradi";
} else {
	echo "dastur false qaytaradi";
}	
 ?>