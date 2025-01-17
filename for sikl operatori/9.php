<?php 

$a = 2;
$b = 8;
$kvadratlar = 1;
for ($i = $a; $i <= $b; $i++){
	$kvadratlar = pow($i, 2);
	$yigindi +=$kvadratlar;
}
echo "($a dan $b gacha) bulgan sonlarning kvadratlri yigindisi:$yigindi";



 ?>