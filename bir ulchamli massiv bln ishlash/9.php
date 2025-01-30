<?php 
// massivni yaratamiz
$massiv = [11, 12, 23, 13, 2, 3, 5, 7, 27, 32, 42];
// uzgaruvchi yaratamiz
$juftson = [];
// forech orqali nom uzgartrib ob juftini topamiz
foreach ($massiv as $son) {
	if ($son % 2 == 0) {
		$juftson[] = $son;
	}
}
rsort($juftson);

echo "Massivni juft elementlari kamayish tartibida: " . implode(", ", $juftson) . '<br>';
 echo "juft sonlar soni: " . count($juftson);



 ?>