<?php 
$a = [1, 40, 30, 40, 60, 70, 23, 90, 1];
$n = count($a);
$res = [$a[0]];

for ($i = 1; $i < $n - 1; $i++) { 
	if ($a[$i] > $a[$i - 1] && $a[$i] > $a[$i + 1]) {
		$res[$i] = 0;
	} else {
		$res[$i] = $a[$i];
	}
}
$res[$n-1] = $a[$n-1];
echo '<pre>';
print_r($res);
echo '</pre>';
 ?>