<?php 
// 96
function removeDuplicatesKeepLast($array) {
    $seen = [];
    $result = [];
    
    foreach ($array as $value) {
        if (!isset($seen[$value])) {
            $seen[$value] = true;
            $result[] =  $value;
        }
    }
    
    return $result;
}

// Test
$array = [1, 2, 3, 1, 4, 2, 5, 3, 6, 4, 7];
$result = removeDuplicatesKeepLast($array);
print_r($result);


 ?>