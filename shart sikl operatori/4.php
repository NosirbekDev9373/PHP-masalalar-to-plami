<?php 

$n = 2;

if ($n <= 0) {
	echo "musbat son qabul qiladi";
	exit;
}
$boolean = false;
$daraja = 1;

while ($daraja <= $n) {
	if ($daraja == $n) {
		$boolean = true;
		break;
	}
	$daraja *= 3;
}
if ($boolean) {
	echo "3 ning darajasi ";
} else {
	echo "3 ning darajasi emas";
}






?>

