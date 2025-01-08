<?php 
// 3 xonali son berilgan ushbu sonning barcha raqamlari har xil 

$a = 345;

$yuzlar = intdiv($a, 100);
$ikkitalik = intdiv($a, 10);
$onlik = $ikkitalik % 10;
$birlik = $a % 10;

$natija = ($yuzlar != $onlik) && ($yuzlar != $birlik) && ($onlik != $birlik);

var_dump($natija);
var_dump($onlik);
var_dump($birlik);
var_dump($yuzlar);
?>