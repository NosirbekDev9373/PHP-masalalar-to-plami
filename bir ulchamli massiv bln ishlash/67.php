<?php 
$massiv = [9, 45, 7, 14, 7, 5, 12];
$n = count($massiv);
$uzgaruvchi = null;

for ($i = $n - 1; $i >= 0; $i--) { 
	if ($massiv[$i] % 2 !== 0) {
		$uzgaruvchi = $massiv[$i];
		break; 
	}
}
if ($uzgaruvchi !== null) {
	for ($i = 0; $i < $n; $i++) { 
		if ($massiv[$i] % 2 !== 0) {
			$massiv[$i] += $uzgaruvchi; 
		}
	}
}

print_r($massiv);

 ?>