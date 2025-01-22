<?php 
$n = 448;
$aniqlash = false;

while ($n > 0) {
	$oxirgison = $n % 10;
	if ($oxirgison % 2 != 0) {
		$aniqlash = true;
		break;
	}
	$n = intdiv($n, 10);
}

if ($aniqlash) {
	echo "xa albatta";
} else {
	echo "yoq";
}
?>