<?php 
// 3 honali sonlar berilgan raqamlar ketma ket joylashgan rostlikka tekshirish
$a = 456;

$uch = intdiv($a, 100);
$ikkitalik = intdiv($a, 10);
$ikki = $ikkitalik % 10;
$bir = $a % 10;

$natija = ((($uch) == ($uch + 1)) == (($uch + 1) + 1));
var_dump($natija);
var_dump($uch);
var_dump($ikki);
var_dump($bir);
 ?>