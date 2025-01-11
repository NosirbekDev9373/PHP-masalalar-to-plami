<?php
// Uchta butun sonni belgilash
$a = 0;
$b = 0;
$c = 0;

// Musbat va manfiy sonlar sonini hisoblash
$positiveCount = 0;
$negativeCount = 0;

// Sonlarni tekshirish
if ($a > 0) {
    $positiveCount++;
} elseif ($a < 0) {
    $negativeCount++;
}

if ($b > 0) {
    $positiveCount++;
} elseif ($b < 0) {
    $negativeCount++;
}

if ($c > 0) {
    $positiveCount++;
} elseif ($c < 0) {
    $negativeCount++;
}

// Natijalarni chiqarish
echo "Musbat sonlar soni: " . $positiveCount . "<br>";
echo "Manfiy sonlar soni: " . $negativeCount;
?>
