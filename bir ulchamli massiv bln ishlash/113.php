<?php 
// 121
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

    // Agar seriyalar soni K dan kam bo'lsa, hech narsa o'zgarmaydi
    if (count($series) < $K) return;

    // K-seriyaning uzunligini 2 marta oshiramiz
    $series[$K - 1] = array_merge($series[$K - 1], $series[$K - 1]);

    // Yangi massivni hosil qilish
    $newArray = [];
    foreach ($series as $s) {
        foreach ($s as $val) {
            $newArray[] = $val;
        }
    }

    // Natijani qaytarish
    $arr = $newArray;
}

// Test qilish
$inputArray = [1, 1, 2, 2, 2, 3, 3, 4, 4, 4, 4];
$K = 4; // 2-seriyani 2 marta oshiramiz

extendKthSeries($inputArray, $K);

echo "Natija: " . implode(", ", $inputArray);


 ?>