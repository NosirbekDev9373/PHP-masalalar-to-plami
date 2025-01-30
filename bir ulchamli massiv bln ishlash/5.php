<?php 
// yana huybanachi sonlar
$k = 12;
$fib = [];
$fib[0] = 1;
$fib[1] = 1;

for ($i = 2; $i < $k; $i++) { 
	$fib[$i] = $fib[$i -1] + $fib[$i - 2];
}
echo "Fibonachi massivimiz: " . implode(", ", $fib);


 ?>