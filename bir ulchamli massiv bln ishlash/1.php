<?php 
$n = 5;

$toq_sonlar = [];

for ($i = 0; $i < $n; $i++) { 
	$toq_sonlar[] = 2 * $i + 1;
}
echo "Dastlabki $n ta toqson: " . implode(", ", $toq_sonlar);

 ?>