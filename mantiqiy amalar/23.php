<?php 
// 3 xonali son berilgan ungdanam chapdanam uqiganda bir xil raqam chiqsin

$a = 232;

$uch = intdiv($a, 100);
$ikkitalik = intdiv($a, 10);
$ikki = $ikkitalik % 10;
$bir = $a % 10;

$natija = ($uch == $bir);
var_dump($natija);
 ?>