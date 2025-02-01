<?php 
function result($masssiv) {
	$hisob = array_count_values($masssiv);
	$maxtakrorlanish = max($hisob);

	return $maxtakrorlanish;
}
$masssiv = [12, 3, 41, 13, 54, 34, 12, 13, 3, 12, 11];

echo "Eng kup qatnashgan elementlar soni: " . result($masssiv);

 ?>