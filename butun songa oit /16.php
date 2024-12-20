<?php 
// 3honalik sonlarni unlik va birliklarini almashtriw

$son = 742;
$birson = intdiv($son, 100);//7
$ikkitalik = $son % 100; // 92
$uchson = $son % 10;// 2
$ikkinchi = intdiv($ikkitalik, 10);//9

$natija = ($birson * 100) + ($uchson * 10) + $ikkinchi;
echo "Natijamiz= $natija"; 

 ?>