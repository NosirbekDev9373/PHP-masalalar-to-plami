<?php 
// a b c butun sonlar berilgan, bu teng yonli uchburchak

$a = 12;
$b = 32;
$c = 32;

if (($a == $b) != $c) {
	echo "teng yonli uchburchak";
}elseif (($b == $c) != $a) {
	echo "teng yonli uchburchak";
}elseif(($c == $a) != $b) {
	echo "teng yonli uchburchak";
}else {
	echo "teng yonli uchburchak emas";
}

 ?>