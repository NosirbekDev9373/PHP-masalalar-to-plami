<?php 
//98
function removeElementsLessThanThree($array) {
    $counts = array_count_values($array);
    $array = array_filter($array, fn($v) => $counts[$v] >= 3);
    
    echo "Elementlar soni: " . count($array) . "<br>";
    echo "<pre>"; print_r(array_values($array)); echo "</pre>";
}

// Test
$array = [1, 2, 3, 1, 4, 2, 5, 3, 6, 4, 7, 3, 1, 2, 4];
removeElementsLessThanThree($array);

?>





 ?>