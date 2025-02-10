<?php
// 108
function insertZeroBeforePositive($arr) {
    $newArray = []; // Yangi massiv yaratamiz

    // Massiv elementlarini tekshiramiz
    foreach ($arr as $val) {
        if ($val > 0) {
            $newArray[] = 0; // Musbat element oldidan 0 qo'shamiz
        }
        $newArray[] = $val; // Asl elementni qo'shamiz
    }

    return $newArray;
}

// Misol uchun massiv
$massiv = [-5, 3, -2, 7, 0, -1, 4];

$natija = insertZeroBeforePositive($massiv);

// Natijani chiqarish
echo "Yangi massiv: [" . implode(", ", $natija) . "]";
?>
