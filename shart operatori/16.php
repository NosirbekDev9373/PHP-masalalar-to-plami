<?php 
// sonlar usish tartibida busa ikkilantirish bumas ishorasini uzgartirish 
$a = 21;
$b = 32;
$c = 43;
$natija ='A = ' . $a * 2 . '<br>' . 'B = ' . $b * 2 . '<br>' . 'C = ' . $c * 2; 
$manfiylar ='A = ' . $a * (-1) . '<br>' . 'B = ' . $b * (-1) . '<br>' . 'C = ' . $c * (-1);  
if ($a < $b && $b < $c) {
	echo "$natija";
} else {
	echo "$manfiylar";
}


 ?>