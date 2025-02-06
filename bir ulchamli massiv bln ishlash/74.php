<?php 
$a = [10, 20, 30, 40, 100, 60, 70, 80, 90];
$n = count($a);
$maxIndex = array_search(max($a), $a);
$minIndex = array_search(min($a), $a);

if ($minIndex > $maxIndex) {
	list($minIndex, $maxIndex) = [$maxIndex, $minIndex];	
}

for ($i = $minIndex + 1; $i < $maxIndex; $i++) { 
	$a[$i] = 0;
}


print_r($a);

 ?>