<?php
function replaceWithAverage(&$arr) {
    $n = count($arr);
    if ($n < 2) return; // Kamida 2 ta element bo'lishi kerak

    $result = $arr;
    
    for ($i = 0; $i < $n - 1; $i++) {
        $result[$i] = ($arr[$i] + $arr[$i + 1]) / 2;
    }
    
    $arr = $result;
}

// Test misol
$arr = [1, 12, 3, 21, 6, 11, 2];
replaceWithAverage($arr);
print_r($arr);
?>
