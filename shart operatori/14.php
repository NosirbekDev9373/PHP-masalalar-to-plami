<?php
// Uchta sonni belgilash
$a = 1;
$b = 144;
$c = 7;

// Eng kichik va eng katta sonni aniqlash
$min = $a;
$max = $a;

// Eng kichik sonni aniqlash
if ($b < $min) {
    $min = $b;
}
if ($c < $min) {
    $min = $c;
}

// Eng katta sonni aniqlash
if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}

// Natijani ekranga chiqarish
echo "Eng kichik son: " . $min . "<br>";
echo "Eng katta son: " . $max;
?>
