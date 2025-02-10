<?php 
// 107
function result($arr) {
	// juft indeksli elementlarni olamiz
	$evenIndexelements = array_values(array_filter($arr, fn($_, $i) => $i % 2 !== 0,  ARRAY_FILTER_USE_BOTH));
	return array_merge($arr, $evenIndexelements);
}
$massiv = [10, 20, 30, 40, 50, 60];

$natija = result($massiv);

echo "Yangi massiv: "; echo "<pre>"; print_r($natija); echo "</pre>";


 ?>