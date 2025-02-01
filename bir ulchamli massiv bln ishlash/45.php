<?php
$massiv = [12, 5, 8, 9, 17, 5, 9]; // Massivni belgilaymiz
$n = count($massiv);

$ayirma = abs($massiv[0] - $massiv[1]);
$son = 0;
for ($i = 1; $i < $n - 1; $i++) {
    if ($ayirma > abs($massiv[$i] - $massiv[$i + 1])) {

        $ayirma = abs($massiv[$i] - $massiv[$i + 1]);
        $son++;       
    }
}
echo $son . ' va ' . $son + 1;

?>
