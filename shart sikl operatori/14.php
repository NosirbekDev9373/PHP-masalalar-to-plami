<?php 

$a = 4;
$sum = 0;
$i = 1;
$k = 0;
while ($sum + ($i + 1 / $i) <= $a) {	
		
	$sum = $i + 1 / $i; 
	$i++;
	$k += 1; 
	echo "$sum <br>";	

}
echo "K = $k <br>";
echo "Yigindimiz S = $sum";


 ?>