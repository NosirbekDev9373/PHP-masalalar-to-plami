<?php
$massiv = [1, 2, 3, 1, 5, 6, 7, 2, 8, 9, 10, 1, 2]; // Berilgan massiv
$n = count($massiv);

$oraliqlar_soni = 0;
for ($i = 1; $i < $n - 1; $i++) { 
    if ($massiv[$i] < $massiv[$i - 1]) { 
        while ($i < $n - 1 && $massiv[$i] < $massiv[$i - 1]) {
            $i++;
        }
        $oraliqlar_soni++;
    }    
}

echo "Monoton kamayuvchi oraliqlar soni: " . $oraliqlar_soni;
?>
