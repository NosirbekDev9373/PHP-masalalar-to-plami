<?php
$a = 2; 
$b = 8; 

// Chiqarilgan sonlarni hisoblaymz
$sonlar_soni = 0;

// a va b orasidagi barcha sonlarni kamayish tartibida chiqarish
for ($i = $b - 1; $i > $a; $i--) {
    echo $i . "<br>";
    $sonlar_soni++; // bu degani har bir son ekranga chiqarilganda sonlarini soni
}

// nechta son qatnashganini kursatamimz
echo "Chiqarilgan sonlar soni: $sonlar_soni<br>";
?>
