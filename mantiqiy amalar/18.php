<?php 
// 3ta son berilgan hech bumagabda 2 tasi bir biriga teng bulishini rostlikka tekshir

$a = 4;
$b = 6;
$c = 6;

$natija = (($a == $b) != $c) || (($b == $c) != $a) || (($c == $a) != $b);

var_dump($natija); 


 ?>