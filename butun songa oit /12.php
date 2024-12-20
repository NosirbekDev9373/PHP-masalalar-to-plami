<?php 
 $son = 245;

$uch = intdiv(245, 100); // uch honali sonlar
$onlik = intdiv(245, 10); // 2 honali
$bir = 245 % 10; // birliklar honasi

// ikki honaligdi yoyvolamza 
$yoy = intdiv($onlik,10); // onlik honasi
$yoyi = $onlik % 10; // birlik honasi
$yoyilma = ($yoyi *10); // 


$yangi_son = ($bir * 100) + $yoyilma +  $uch;
echo "$yangi_son<br>";

?>