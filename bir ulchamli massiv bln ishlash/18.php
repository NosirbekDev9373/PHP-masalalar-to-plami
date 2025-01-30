<?php 
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13, 12];
$n = count($massiv);

$oxirgiElement = $massiv[$n - 1]; // Oxirgi elementni olish
$topildi = false;       // Natija topilganligini tekshirish uchun flag

foreach ($massiv as $element) {
    if ($element < $oxirgiElement) {
        echo "Birinchi mos element: " . $element;
        $topildi = true;
        break; // Birinchi mos kelgan elementni topib, loopni to‘xtatamiz
    }
}

// Agar hech qanday mos keladigan element topilmasa, 0 chiqaramiz
if (!$topildi) {
    echo "0";
}
?>
