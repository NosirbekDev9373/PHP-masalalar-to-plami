<?php 
//120
function compressArray($arr) {
	$res = [];      // natijaviy massiv
	$n = count($arr);

    if ($n == 0) return $res; // bush tuplam buladi

    $res[] = $arr[0]; // birinchi element qushamiz

    for ($i = 1; $i < $n; $i++) { 
    	if ($arr[$i] != $arr[$i - 1]) {
    		$res[] = $arr[$i];
    	}
    }

    return $res;
}

$arr = [2, 2, 2, 4, 4, 5, 5, 5, 6, 7];
$natija = compressArray($arr);
echo "Natija: "; echo "<pre>"; print_r($natija); echo "</pre>";



 ?>