<?php 
/////// BIR NECHTA MASSIV BILAN ISHLASH
// 1 usuli
/*
$a = [1, 2, 3, 4, 5, 6, 7];
$b = [10, 20, 30, 40, 50, 60, 70, 80]; 

list($a, $b) = [$b, $a];


print_r($a);
print_r($b);		
*/
// 2 usuli 
$a = [1, 2, 3, 4, 5, 6, 7];
$b = [10, 20, 30, 40, 50, 60, 70, 80]; 

$uzgaruvchi = $a;
$a = $b;
$b = $uzgaruvchi;

print_r($a);
print_r($b);

// 3 usul
/*
$a = [1, 2, 3, 4, 5, 6, 7];
$b = [10, 20, 30, 40, 50, 60, 70, 80];

// Almashtirish
array_splice($a, 0, count($a), $b);
array_splice($b, 0, count($b), $a);

print_r($a);
print_r($b);
*/

?>

?>