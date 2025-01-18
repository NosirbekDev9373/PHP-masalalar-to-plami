<?php  

$a = 2;
$n = 4;
$kvadrat = 1;
$yigindi = 1;
$belgi = 1;
for ($i = 1; $i <= $n; $i++) { 
	$kvadrat = pow($a, $i);
	$belgi *= -1;
	$yigindi += $belgi * $kvadrat;
	echo "$kvadrat<br>";

}
echo "darajalarni yigindisi S = 1 - a*2 + a*3 - ....a*n <br>S = $yigindi <br>";



 ?>