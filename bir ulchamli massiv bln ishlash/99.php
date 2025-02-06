<?php 
// 105
function result($arr, $k, $m) {
	if ($k < 0 || $k >= count($arr)) {
		return "Notug'ri indeks!";
	}
	if ($m < 1 || $m > 10) {
		return "m 1 va 10 gacha bo'lishi kerak";
	}
	// m ta 0 qo'shish
	$zeros = array_fill(0, $m, 0);
	array_splice($arr, $k + 1, 0, $zeros);

	return $arr;
}
$arr = [1, 2, 4, 6, 7, 90, 12, 22, 3];
$k = 2;
$m = 2;

$natija = result($arr, $k, $m);

echo "Yangi massiv: "; echo "<pre>"; print_r($natija); echo "</pre>";

 ?>