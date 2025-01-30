<?php 
$n = 10;
//massivni kiritamiz
$massiv = [];
// massiv elementlarini topib olamzi
for ($i = 0; $i < $n; $i++) { 
	$massiv[$i] = $i;
}
// toq sonlarni topib chiqoramiz
$toqson = [];
foreach ($massiv as $son) {
	if ($son % 2 != 0) {
	    $toqson[] = $son;
	}
}
sort($toqson);

 echo "Massivni toq elementlari: " . implode(", ", $toqson) . '<br>';
 echo "Toq sonlar soni: " . count($toqson);









 ?>