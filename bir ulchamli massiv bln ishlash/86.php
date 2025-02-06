<?php
function removeElementsInRange(&$arr, $k, $m) {
    $n = count($arr);
    if ($k < 0 || $m >= $n || $k > $m) {
        echo "Noto‘g‘ri indekslar berilgan!";
        return;
    }

    // k dan m gacha bo'lgan elementlarni o'chirish
    array_splice($arr, $k, $m - $k + 1);

    // Yangi massivni chiqaramiz
    echo "Massiv uzunligi: " . count($arr) . "<br>";
    echo "Yangi massiv: " . implode(", ", $arr) . "<br>";
}

// Misol uchun massiv va indekslar
$array = [90, 210, 30, 40, 50, 60, 70];
$k = 2;
$m = 4;

removeElementsInRange($array, $k, $m);
?>
