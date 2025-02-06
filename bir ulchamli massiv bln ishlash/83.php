<?php
function insertFirstElement(&$arr) {
    $n = count($arr);
    if ($n <= 1) return; // Agar massivda faqat bitta element bo'lsa, hech narsa qilmaymiz

    $firstElement = $arr[0]; // Birinchi elementni saqlaymiz
    $i = 1;

    // Birinchi element o'z joyini topguncha siljitamiz
    while ($i < $n && $arr[$i] < $firstElement) {
        $arr[$i - 1] = $arr[$i];
        $i++;
    }

    // Birinchi elementni kerakli joyga qo'yamiz
    $arr[$i - 1] = $firstElement;
}

// Misol uchun massiv
$array = [7, 1, 2, 3, 4, 5, 6, 8, 9]; // 7 noto‘g‘ri joyda, tartibni saqlash kerak

// Funksiyani chaqirish
insertFirstElement($array);

// Natijani chiqarish
echo "<pre>"; print_r($array); echo "</pre>" ;
?>
