<?php
function shiftArrayRight(&$arr) {
    $n = count($arr);
    if ($n == 0) return;

    // Massivni siljitish
    for ($i = $n - 1; $i > 0; $i--) {
        $arr[$i] = $arr[$i - 1];
    }
    
    // Birinchi elementni 0 ga o'zgartirish
    $arr[0] = 0;
}

// Misol uchun massiv
$array = [1, 12, 3, 21, 6, 11, 2];

// Funksiyani chaqirish
shiftArrayRight($array);

// Natijani chiqarish
print_r($array);
?>
