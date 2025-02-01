<?php 
$a = [1, 2, 3, 4, 5, 6, 7];
$n = count($a);

for ($i = 0; $i < $n; $i++) {
	if ($a[$i] < 5) {
		$b[$i] = 2 * $a[$i];
	} else {
        $b[$i] = $a[$i] / 2;
	}
}
echo "A massivi: " . implode(", ", $a) . "<br>";
echo "B massivi: " . implode(", ", $b);

 ?>