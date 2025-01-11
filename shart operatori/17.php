<?php 
// sonlar usish  yoki kamayish tartibida busa ikkilantirish bumasa ishorasini uzgartirish 
$a = 0;
$b = 231234;
$c = 345;
$natija ='A = ' . $a * 2 . '<br>' . 'B = ' . $b * 2 . '<br>' . 'C = ' . $c * 2; 
$manfiylar ='A = ' . $a * (-1) . '<br>' . 'B = ' . $b * (-1) . '<br>' . 'C = ' . $c * (-1);  
if (($a < $b && $b < $c) || ($a > $b && $b > $c)) {
	echo "$natija";
} else {
	echo "$manfiylar";
}


 ?>