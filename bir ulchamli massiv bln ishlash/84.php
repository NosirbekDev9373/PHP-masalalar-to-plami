<?php 
function insertFirstElement(&$arr) {
    $n = count($arr);
    if ($n <= 1) return; // Agar massivda faqat bitta element bo'lsa, hech narsa qilmaymiz

    $lastElement = $arr[$n - 1]; // Birinchi elementni saqlaymiz
    $i = $n - 2;

    // Birinchi element o'z joyini topguncha siljitamiz
    while ($i >= 0 && $arr[$i] > $lastElement) {
        $arr[$i + 1] = $arr[$i];
        $i--;
    }

    // Birinchi elementni kerakli joyga qo'yamiz
    $arr[$i + 1] = $lastElement;
}

// Misol uchun massiv
$array = [0, 2, 3, 4, 6, 8, 5]; 

// Funksiyani chaqirish
insertFirstElement($array);

// Natijani chiqarish
echo "<pre>"; print_r($array); echo "</pre>" ;


 ?>