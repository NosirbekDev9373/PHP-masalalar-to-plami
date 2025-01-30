<?php 
$massiv = [1, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13, 21];
$n = count($massiv);
$oxirgielement = $massiv[$n - 1];
$birinchielement = $massiv[0];
$topilsa = false;

foreach ($massiv as $elementlar) {
	if ($elementlar < $oxirgielement && $elementlar > $birinchielement) {
		echo "oxirgielementdan kichkina dastlabkidan katta oxirgi element indeksi " . $elementlar;
		$topilsa = true;
		break;
	}
}

if (!$topildi) {
    echo "0";
}




 ?>