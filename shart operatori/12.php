<?php 
// 3 ta son berolgan kichigini aniqlash 
$a = 24;
$b = 32;
$c = 23;
if ($a < $b && $a< $c) {
	echo "$a eng kichik son";
} elseif ($b < $a && $b < $c) {
	echo "$b eng kichigi son";
} elseif ($c < $a && $c < $b) {
	echo "$c eng kichik son";
} else {
	echo "bir biriga teng bumasligi kk sonlar";
}


 ?>