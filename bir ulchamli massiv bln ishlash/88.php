<?php
function removeEvenIndexElements(&$arr) {
    $arr = array_values(array_filter($arr, fn($_, $index) => $index % 2, ARRAY_FILTER_USE_BOTH));

    // Natijalarni chiqarish
    echo "Yangi massiv: ";
    print_r($arr);
    echo "<br>" . "Elementlar soni: " . count($arr);
}

// Misol uchun massiv
$array = [10, 15, 20, 25, 30, 35, 40, 45, 50];

removeEvenIndexElements($array);
?>

