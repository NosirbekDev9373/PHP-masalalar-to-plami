<?php 
// 127
function extendKthSeries(&$arr, $K) {
    $n = count($arr);
    if ($n == 0 || $K <= 0) return;

    $series = [];
    $currentSeries = [$arr[0]];

    // Massivni seriyalarga ajratish
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] == $arr[$i - 1]) {
            $currentSeries[] = $arr[$i];
        } else {
            $series[] = $currentSeries;
            $currentSeries = [$arr[$i]];
        }
    }
    $series[] = $currentSeries; // Oxirgi seriyani qo'shamiz

    $newarray = [];
    foreach ($series as $s) {
    	if (count($s) > $K) {
    		$newarray[] = 0; // k dan kichik bolsa 0 boladi
    	} else {
    		foreach($s as $val) {
    			$newarray[] = $val;
    		}
    	}
    }
    // natijani qaytaramiz
    $arr = 	$newarray;
}
$inputArray = [1, 1, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4];
$K = 4; // 3 dan kichik bolgan seriayalarni 1 ta 0 ga almashtiramiz

extendKthSeries($inputArray, $K);

echo "Natija: " . implode(", ", $inputArray);


 ?>