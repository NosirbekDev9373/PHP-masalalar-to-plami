<?php 
$massiv = [12, 50, 20, 30, 50, 60, 80]; 
$n = count($massiv);
$qushilma = $massiv[0] + $massiv[1];

for ($i = 1; $i < $n - 1; $i++) { 
	if ($qushilma < ($massiv[$i] + $massiv[$i + 1])) {
		$qushilma = ($massiv[$i] + $massiv[$i + 1]);
	}
}
echo $qushilma;






 ?>