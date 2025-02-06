<?php
function replaceLocalMaxima(&$arr) {
    $n = count($arr);
    if ($n < 3) return; // Lokal maksimum faqat 3 yoki undan ko'p elementli massivda bo'lishi mumkin

    $result = $arr;
    
    for ($i = 1; $i < $n - 1; $i++) {
        if ($arr[$i] < $arr[$i - 1] && $arr[$i] < $arr[$i + 1]) {
            $result[$i] *= $result[$i];
        }
    }
    
    $arr = $result;
}

// Test misol
$arr = [1, 12, 3, 21, 6, 11, 2];
replaceLocalMaxima($arr);
echo "<pre>"; print_r($arr); echo "</pre>";
?>
