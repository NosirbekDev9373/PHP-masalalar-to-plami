<?php
// Butun son berilgan
$son = -5; // Misol uchun sonni kiritamiz

// Shart operatori orqali tekshirish
if ($son > 0) {
    $son++; // Sonni 1 ga oshirish
} elseif($son < 0) {
    $son -= 2; // Sonni 2 ga kamaytirish
} elseif($son == 0) {
    $son + 10;
}

// Natijani ekranga chiqarish
echo "Hozirgi son: " . $son;
?>
