<?php 
// 101

function result($arr, $k) {
	if ($k < 0 || $k >= count($arr)) {
		
		return "Notugri indeks";
	}

	array_splice($arr, $k, 0, 0);

	return $arr;
}
$arr = [1, 2, 5, 67, 65, 5, 32, 12];
$k = 4;

$natija = result($arr, $k);
echo "Yangi masssiv: "; echo "<pre>"; print_r($natija); echo "</pre>";


 ?>