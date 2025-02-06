<?php 
// 95
function deletArray($array) {
	if (empty($array)) return [];

	$res = [$array[0]];
	$n = count($array);

	for ($i = 1; $i < $n; $i++) { 
		if ($array[$i] !== $array[$i - 1]) {
			$res[] = $array[$i];
		}
	}
	return $res;
}
$array = [1, 1, 2, 3, 3, 3, 4, 4, 5, 6, 6, 6, 7];
$res = deletArray($array);
print_r($res);


 ?>