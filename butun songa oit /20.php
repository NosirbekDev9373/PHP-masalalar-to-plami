<?php 
// qancha minut va sekunt ketganini aniqlovchi programma

$sekunt = 324234;
$minut = intdiv($sekunt, 60);
$sekunt = $sekunt % 60;

echo "$minut minutu $sekunt sekunt.";

 ?>