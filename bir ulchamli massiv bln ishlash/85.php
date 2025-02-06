<?php 
//90
$arr = [0, 2, 3, 4, 6, 8, 5];
$n = count($arr);
$k = 3;
unset($arr[$k]);
$arr = array_values($arr);

echo "<pre>"; print_r($arr); echo "</pre>";



 ?>