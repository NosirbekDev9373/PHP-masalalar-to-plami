<?php 
// 97
function removeDuplicatesKeepLast($array) {
    $seen = [];
    $result = [];
    
    // Massivni teskari yurib chiqamiz
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if (!isset($seen[$array[$i]])) {
            $seen[$array[$i]] = true;
            array_unshift($result, $array[$i]);
        }
    }
    
    return $result;
}

// Test
$array = [1, 2, 5, 1, 4, 2, 3, 3, 6, 4, 7];
$result = removeDuplicatesKeepLast($array);
print_r($result);
 ?>