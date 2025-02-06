<?php 
$massiv = [1, 45, 7, 21, 7, 5, 12];
$n = count($massiv);
$birinchi = null;

for ($i = 0; $i < $n; $i++) { 
	if ($massiv[$i] % 2 == 0) {
		$birinchi = $massiv[$i];
		break; 
	}
}
if ($birinchi !== null) {
	for ($i = 0; $i < $n; $i++) { 
		if ($arr[$i] % 2 == 0) {
			$massiv[$i] += $birinchi; 
		}
	}
}

print_r($massiv);

 ?>