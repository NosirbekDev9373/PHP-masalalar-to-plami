<?php 
$massiv = [14, 12, 20, 13, 50, 20, 80, 50, 12, 3]; 
$n = count($massiv);
$soni = 0;
for ($i = 1; $i < $n; $i++) { 
	
	if ($massiv[$i] > $massiv[$i + 1]) {		
		$soni += 1;
	}
}
echo $soni;




 ?>