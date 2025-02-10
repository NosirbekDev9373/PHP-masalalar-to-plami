<?php 
// 118
function modifySeries($A) {
    $B = []; // Yangi hosil bo'ladigan massiv
    $n = count($A);
    $count = 1; // Seriya uzunligini hisoblash uchun

    for ($i = 1; $i < $n; $i++) {
        if ($A[$i] == $A[$i - 1]) {
            $count++; // Agar oldingi element bilan teng bo‘lsa, seriyani uzaytiramiz
        } else {
            $B[] = $count; // Seriya uzunligini qo‘shamiz
            $B[] = $A[$i - 1]; // Seriyaning asosiy qiymatini qo‘shamiz
            $B[] = 0;  // Har bir seriyadan oldin 0 qo‘shamiz
            $count = 1; // Yangi seriya boshlanadi
        }
    }
    
    // Oxirgi seriyani qo‘shamiz
    $B[] = $count;
    $B[] = $A[$n - 1];
    $B[] = 0;

    return $B;
}

// Test qilish
$A = [2, 2, 2, 3, 3, 4, 4, 4, 4, 5, 5, 2];
$B = modifySeries($A);

echo "<pre>"; print_r($B); echo "</pre>";



 ?>