<?php 
// 3 honali son bor, 1-raqamini uchirib oxiriga quyish 

$son = 684;

$birinchi_son = intdiv($son, 100); // butun son ciqadi

$ikkita_son = $son % 100; 

$natija = ($ikkita_son * 10) + $birinchi_son;

echo "Yangi hosil bulgan son = $natija<br>";

echo "Eski sonimiz $son";

 ?>