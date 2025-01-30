<?php 
//
$massiv = [12, 23, 34, 54, 52, 11, 5, 43, 64, 65, 11, 15, 13];
$n = count($massiv);
echo "Massivdagi juft indekslar ";

for ($i = 0; $i <= $n; $i += 2) { 
	echo $massiv[$i] . ", ";
}
echo " <br> Massivdagi toq indekslar ";

for ($i = 1; $i <= $n; $i += 2) { 
	echo $massiv[$i] . ", "; 
}



 ?>