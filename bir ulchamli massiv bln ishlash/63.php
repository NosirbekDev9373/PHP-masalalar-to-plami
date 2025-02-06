<?php
// Berilgan massivlar
$a = array(1, 2, 3, 4, 9);
$b = array(5, 6, 7, 8, 10);

$n = count($a);
$m = count($b);
$c = array();
$i = 0; $j = 0; $k = 0;

// Ikki tartiblangan massivni birlashtirish (Merge)
while ($i < $n && $j < $m) {
    if ($a[$i] < $b[$j]) {
        $c[$k++] = $a[$i++];
    } else {
        $c[$k++] = $b[$j++];
    }
}

// Agar a massivida qolgani bo'lsa
while ($i < $n) {
    $c[$k++] = $a[$i++];
}

// Agar b massivida qolgani bo'lsa
while ($j < $m) {
    $c[$k++] = $b[$j++];
}

// Natijani chiqarish
echo "C massivi: ";
for ($i = 0; $i < count($c); $i++) {
    echo $c[$i] . " ";
}
echo "\n";
?>
