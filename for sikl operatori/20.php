<?php 

$n = 6;
$kupaytma = 1;
$yigindi = 0;
for ($i = 1; $i <= $n; $i++) { 
	$kupaytma *=$i;
	$yigindi += $kupaytma;
	//echo "$yigindi<br>";
}
echo "1! + 2! + 3! + ....+n! <br>$n!=$yigindi<br>";


 ?>