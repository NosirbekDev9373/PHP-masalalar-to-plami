<?php 
function qiymat($a, $b, $c) {
    if ($a == 0) {
        return "A soni nolga teng bo‘lmasligi kerak.";
    }
    
    // Diskriminantni hisoblash
    $D = pow($b, 2) - 4 * $a * $c;
    
    // Haqiqiy ildizlar mavjudligini tekshirish
    if ($D >= 0) {
        return "Ax² + Bx + C = 0 tenglamasi haqiqiy ildizlarga ega.";
    } else {
        return "Ax² + Bx + C = 0 tenglamasi haqiqiy ildizlarga ega emas.";
    }
}

// Misol uchun qiymatlarni tekshirish
$a = 9; // A qiymati
$b = -11; // B qiymati
$c = 23; // C qiymati

echo qiymat($a, $b, $c);

 ?>