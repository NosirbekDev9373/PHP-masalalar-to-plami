<?php
// 128
function addElementToLongestSeries(&$arr) {
    $n = count($arr);
    if ($n == 0) return;

    $series = [];
    $currentSeries = [$arr[0]];
    $maxLength = 0;
    $longestIndex = -1;

    // Massivni seriyalarga ajratish
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] == $arr[$i - 1]) {
            $currentSeries[] = $arr[$i];
        } else {
            $series[] = $currentSeries;
            if (count($currentSeries) > $maxLength) {
                $maxLength = count($currentSeries);
                $longestIndex = count($series) - 1;
            }
            $currentSeries = [$arr[$i]];
        }
    }
    $series[] = $currentSeries;

    // Oxirgi seriyani tekshirish va eng uzun seriyaga qarab yangilash
    if (count($currentSeries) > $maxLength) {
        $maxLength = count($currentSeries);
        $longestIndex = count($series) - 1;
    }

    // Agar eng uzun seriya topilgan bo'lsa, unga yangi element qo'shamiz
    if ($longestIndex != -1) {
        $series[$longestIndex][] = $series[$longestIndex][0]; // Seriyaga o‘sha elementdan bittasini qo‘shamiz
    }

    // Yangi massivni shakllantirish
    $newArray = [];
    foreach ($series as $s) {
        foreach ($s as $val) {
            $newArray[] = $val;
        }
    }

    // Natijani qaytarish
    $arr = $newArray;
}

// Test qilish
$inputArray = [1, 1, 2, 2, 2, 3, 3, 3, 3, 4, 4];
addElementToLongestSeries($inputArray);

echo "Natija: " . implode(", ", $inputArray);
?>
