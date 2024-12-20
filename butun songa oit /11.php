<?php 
// uch honali sonlar yigindisi

$son = 789;

$uch = intdiv(789, 100); // uch honali sonlar
$ikki = intdiv(789, 10); // 2 honali
$bir = 789 % 10; // birliklar honasi
$yigindi = $uch + $ikki + $bir;
echo $yigindi;

 ?>