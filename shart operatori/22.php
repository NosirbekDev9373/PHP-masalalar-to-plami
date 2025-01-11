<?php 
// ox va oy kordinata uqlarida yotmaydigan nuqta berilgan,nuqta joylashgan kordinata choragini aniqlash

$x = 2;
$y = 6;

if ($x > 0 && $y > 0) {
	echo "birinchi chorakda yotadi";
} elseif ($x < 0 && $y > 0) {
	echo "ikkinchi chorakda yotadi";
} elseif ($x < 0 && $y < 0) {
	echo "uchinchi chorakda yotadi";
} elseif ($x > 0 && $y < 0) {
	echo "turtinchi chorakda yotadi";
} elseif ($x == 0 || $y == 0) {
	echo "mumkin emas ox va oy uqida yotish";
}


 ?>