<?php 
$massiv = [2, 45, 5, 7, 12, 79, 78, 23, 3, 3, 42]; 
$n = count($massiv);

$birinchi_indeks = -1;
$ikkinchi_indeks = -1;

for ($i = 0; $i < $n; $i++) {
    
    for ($j = $i + 1; $j < $n; $j++) { 
     	
     	if ($massiv[$i] == $massiv[$j]) {
		    
		    $birinchi_indeks = $i;
		    
		    $ikkinchi_indeks = $j;
		    
		    break 2; 
        } 
	
	}
}
echo "Bir xil qiymatli elementlar indekslari: $birinchi_indeks va $ikkinchi_indeks";



 ?>