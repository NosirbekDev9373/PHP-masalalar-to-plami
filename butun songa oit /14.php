<?php 
// sonning ung tomondagisini uchirib,chap tomonga quyish

$son = 765;

$bittalik_son = $son % 10; // berilgan sonni oxirdagisi

$ikkitalk_son = intdiv($son, 10); // berilgan sonni boshidan 2tasi

$natija = ($bittalik_son * 100) + $ikkitalk_son;

echo "Natijamiz: $natija<br>";
echo "Berilgan sonimiz: $son"; 

 ?>