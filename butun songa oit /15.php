<?php 
// (Kirsh=123 Natija=213) shuni taxlaymiz

$son = 197;

$yuzlik_son = intdiv($son, 100); // 5 soni 
$unlik_birlik = $son % 100; // qoldiqlar 67
$almashtirish = intdiv($unlik_birlik, 10); // 6 soni
$birlik = $unlik_birlik % 10; // 7 soni 

$natija = ($almashtirish * 100) + ($yuzlik_son * 10) + $birlik; 

echo "Natijamiz: $natija";

 ?>