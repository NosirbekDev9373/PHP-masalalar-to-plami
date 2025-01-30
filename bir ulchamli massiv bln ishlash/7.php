<?php 

$n = 13;
$massiv = [];
// massivni kurinishi 
for ($i = 0; $i < $n; $i++) { 
	$massiv[$i] = $i;
}

// teskari tartibda kurinishi 
for ($i = $n - 1; $i >= 0; $i--) { 
	echo $massiv[$i] . ", ";
}


 ?>