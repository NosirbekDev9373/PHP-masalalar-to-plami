<?php
// 112
function bubbleSort($arr) {
    $n = count($arr);

    // Pufaksimon saralash algoritmi
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) { // Agar keyingi element kichik bo‘lsa, joyini almashtiramiz
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

// Misol uchun massiv
$massiv = [64, 34, 25, 12, 22, 11, 90];

$natija = bubbleSort($massiv);

// Natijani chiqarish
echo "Saralangan massiv: [" . implode(", ", $natija) . "]";
?>

