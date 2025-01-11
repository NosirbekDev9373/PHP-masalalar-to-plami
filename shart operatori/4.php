<?php 
// 3 ta son berilgan nechta mubat va nechta manfiy son borligini aniqlash
$a = -1;   
$b = -3;
$c = 213;
$son = ($a > 0 && $b > 0 && $c > 0);
$son1 = ($a < 0 && $b < 0 && $c < 0);

if($son) {
	echo "3ta musbat son bor";

}elseif(($a > 0 && (($b * $c) < 0))) {
	echo "2ta musbat son bor va 1 manfiy";

}elseif(($b > 0 && (($a * $c) < 0))) {
	echo "2ta musbat son bor va 1 ta manfiy";

}elseif(($c > 0 && (($a * $b) < 0))) {
	echo "2ta musbat son bor va 1 ta manfiy";

}elseif($son1) {
	echo "3ta manfiy son bor";

}elseif($a > 0 && $b < 0 && $c < 0) {
	echo "2ta manfiy son bor va 1 musbat son bor";

}elseif($b > 0 && $a < 0 && $c < 0) {
	echo "2 manfiy son bor va 1 ta musbat son bor";

}elseif($c > 0 && $a < 0 && $b < 0) {
	echo "2 manfiy son bor va 1 ta musbat son bor";
}
 ?>