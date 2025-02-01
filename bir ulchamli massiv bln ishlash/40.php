<?php
$massiv = [3, 10, 20, 30, 50, 60, 80]; // Berilgan massiv
$R = 25; // Berilgan R soni
$n = count($massiv);

$eng_yaqin = $massiv[0]; // Dastlab birinchi elementni eng yaqin deb olamiz
$min_farq = abs($massiv[0] - $R); // Modul farqni hisoblaymiz

for ($i = 1; $i < $n; $i++) {
    $farq = abs($massiv[$i] - $R); // Har bir element uchun modul farqni topamiz
    if ($farq < $min_farq) { 
        $min_farq = $farq;
        $eng_yaqin = $massiv[$i];
    }
}

echo "R = $R soniga eng yaqin element: " . $eng_yaqin;
?>
