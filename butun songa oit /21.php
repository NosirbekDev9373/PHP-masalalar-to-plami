<?php 
// qancha soat,minut va sekunt ketganini aniqlovchi programma
$son = 2342234;
$minut = intdiv($son, 60);
$sekunt = $son % 60;
$soat = intdiv($son, 3600);

echo "$soat soat $minut minutu $sekunt sekunt.";
 ?>