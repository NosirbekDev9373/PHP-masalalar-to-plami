<?php
// 109
function insertZeroBeforePositive($arr) {
    $newArray = []; // Yangi massiv yaratamiz

    // Massiv elementlarini tekshiramiz
    foreach ($arr as $val) {
        $newArray[] = $val;
        if ($val < 0) {
            $newArray[] = 0; // Manfiy element oldidan 0 qo'shamiz
        }
    }

    return $newArray;
}

// Misol uchun massiv
$massiv = [-5, 3, -2, 7, 0, -1, 4];

$natija = insertZeroBeforePositive($massiv);

// Natijani chiqarish
echo "Yangi massiv: [" . implode(", ", $natija) . "]";
?>
