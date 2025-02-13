<?php 
// String ichidan qidirish (strpos)
$str = "Hello World";
$pos = strpos($str, "World");

if ($pos !== false) {
	echo "Topildi! Indeksi: " . $pos; // Natijamiz 6	
}

// strpos() berilgan so'z yoki belgi qayerda joylashganini topadi.

 ?>