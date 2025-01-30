<?php
// Foydalanuvchidan n, A va D qiymatlarini olish
$n = 9;
$a = 4;
$d = 6;
$massiv = [];
// Arifmetik progressiyaning har bir hadini hisoblash va chiqarish
for ($i = 0; $i < $n; $i++) {
    $massiv[] = ($a + $i * $d);
}
echo implode(", ", $massiv);
?>
