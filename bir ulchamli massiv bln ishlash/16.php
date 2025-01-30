<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13, 3];
$n = count($massiv);

$left = 0;         // boshlangich indeks chapdan
$right = $n - 1;   // ogirgi indeks ingdan

while ($left <= $right) {
	// chapdan chiqaramiz elementlarni
	echo $massiv[$left] . ", ";
	$left++;

	// ungdan elementlarni chiqarish
	if ($left <= $right) {
	 	echo $massiv[$right] . ", ";
	 	$right--;
	 } 
}



 ?>