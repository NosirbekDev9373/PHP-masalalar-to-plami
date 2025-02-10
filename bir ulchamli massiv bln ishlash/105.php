<?php 
// 111
function newarr($massiv) {
	
	$newMassiv = [];

    foreach ($massiv as $val) {
	    
	    $newMassiv[] = $val;
	    
	    if ($val % 2 !== 0) {
		    $newMassiv[] = $val;
	    }
    }
    
    return $newMassiv;
}

$massiv = [1, 2, 3, 4, 5, 6, 7, 8];

$natija = newarr($massiv);

echo "<pre>"; print_r($natija); echo "</pre>";


 ?>