<?php
// n sonini belgilash
$n = 5; // Masalan, n = 5

// Yig'indini hisoblash uchun o'zgaruvchi
$yigindi = 0;

// Belgini hisoblash uchun o'zgaruvchi (-1 yoki 1)
$belgi = 1;

// 1.1 - 1.2 + 1.3 - ... (n ta qo'shiluvchi) yig'indini hisoblash
for ($i = 1; $i <= $n; $i++) {
    $yigindi += $belgi * (1 + $i / 10); // Har bir qo'shiluvchi ishora bilan qo'shiladi
    $belgi *= -1; // Belgini o'zgartirish
}

// Natijani chiqarish
echo "Yig'indisi (n = $n): $yigindi<br>";
?>
