<?php
// 92
$array = [11, 14, 17, 20, 23, 26, 29, 32];
$newArr = [];
$removed = [];

foreach ($array as $value) {
     if ($value % 2 == 0) {
        $newArr[] = $value;
     } else {
        $removed[] = $value;
     }
 }
 $array = $newArr;
 echo "Yangi massiv: ";
 echo "<pre>"; print_r($array); echo "</pre>";
?>
