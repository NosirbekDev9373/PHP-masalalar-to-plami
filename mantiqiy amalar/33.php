<?php 
// a b c butun sonlar berilgan, uchburchak yasash mumkin

$a = 31;
$b = 43;
$c = 52;

$natija = (($a + $b) > $c) && (($b + $c) > $a) && (($c + $a) > $b);
var_dump($natija);



 ?>