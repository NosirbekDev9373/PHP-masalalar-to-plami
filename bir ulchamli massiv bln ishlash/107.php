<?php 
// 113
function selectionsort($arr) {
    $n = count($arr);


    for ($i = 0; $i < $n - 1; $i++) { 
    	$minIndex = $i;   // kichik element indeksi

    	// qolganlari eng kichigi
    	for ($j = $i + 1; $j < $n; $j++) { 
    		
    		if ($arr[$j] < $arr[$minIndex]) {
    			
    			$minIndex = $j; // eng kichik element
    		}
    	}
    	// eng kichik elementni almashtirish

    	if ($minIndex != $i) {
    		$temp = $arr[$i];
    		$arr[$i] = $arr[$minIndex];
    		$arr[$minIndex] = $temp;

    	}
    }


    return $arr;
}

// Misol uchun massiv
$massiv = [64, 34, 25, 12, 22, 11, 90];

$natija = selectionsort($massiv);

// Natijani chiqarish
echo "Saralangan massiv: [" . implode(", ", $natija) . "]";




 ?>