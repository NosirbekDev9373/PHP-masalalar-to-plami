<?php 
// massivni yaratamiz
$massiv = [11, 12, 23, 13, 2, 3, 5, 7, 27, 32, 42];
// uzgaruvchi yaratamiz
$juftson = [];
$toqson = [];
// forech orqali nom uzgartrib ob juftini topamiz
foreach ($massiv as $son) {
	if ($son % 2 == 0) {
		$juftson[] = $son;
	}

    if ($son % 2 != 0) {
    	$toqson[] = $son;
    }
}
sort($juftson);
rsort($toqson);

echo "Massivni juft elementlari: " . implode(", ", $juftson) . '<br>';
echo "Massivni toq elementlari: " . implode(", ", $toqson) . '<br>';



 ?>