<?php 
$a = [2, 45, 7, 44, 4, 5, 6];
$k = 4;
$n = count($a);

if ($k < 1 || $k > $n) {
	echo "K qiymati xato 1 dan $n gacha bulishi kk";
	exit;
}
$ortiruvchi = $a[$k - 1];

for ($i = 0; $i < $n; $i++) { 
	$a[$i] += $ortiruvchi; 
}
print_r($a);

 ?>