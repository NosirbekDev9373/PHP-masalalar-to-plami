<?php 
$a = [100, 20, 30, 40, 60, 70, 80, 90, 1];
$n = count($a);
$maxIndex = array_search(max($a), $a);
$minIndex = array_search(min($a), $a);
if ($minIndex > $maxIndex) {
	list($minIndex,$maxIndex) = [$maxIndex, $minIndex];
}
$left = $minIndex;
$right = $maxIndex;

while ($left < $right) { 
	list($a[$left], $a[$right]) = [$a[$right], $a[$left]];
	$left++;
	$right--;

}
print_r($a);
 ?>