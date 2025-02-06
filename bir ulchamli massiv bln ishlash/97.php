<?php 
// 103
function result($arr) {
	if (empty($arr)) {
		
		return "Bo'sh massiv";
	}

	$minIndex = array_search(min($arr), $arr);
	$maxIndex = array_search(max($arr), $arr);

	// eng kichik elementni oldiga 0 qushish
	array_splice($arr, $minIndex, 0, 0);

	if ($maxIndex > $minIndex) {
		$maxIndex++;
	}
	// eng katta elementdan keyin 0 qo'shish
	array_splice($arr, $maxIndex + 1, 0, 0);
	return $arr;	
}
$arr = [1, 2, 5, 67, 65, 12, 22];

$natija = result($arr);
echo "Yangi masssiv: "; echo "<pre>"; print_r($natija); echo "</pre>";


 ?>