<?php
function shiftArrayRightByK(&$arr, $k) {
    $n = count($arr);
    if ($k <= 0 || $k >= $n) return;

    // Massivni siljitish
    for ($i = 0; $i < $n - $k; $i++) {
        $arr[$i] = $arr[$i + $k];
    }

    // Massivning oxirgi k ta elementini 0 ga almashtirish
    for ($i = $n - $k; $i < $n; $i++) {
        $arr[$i] = 0;
    }
}

// Misol uchun massiv va k qiymati
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$k = 3; // 3 ta o‘rin o‘ngga suriladi

// Funksiyani chaqirish
shiftArrayRightByK($array, $k);

// Natijani chiqarish
print_r($array);
?>
