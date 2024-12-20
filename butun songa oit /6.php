<?php 

// 2honali  son berilgan oldin unliklarini ciqarish sung 1 lik honasini ciqarsh

$son = 76;

$onlik = intdiv($son, 10); // indiv bu butun bulishni qaytaradi

$birlik = $son % 10; // % qoldiqni oladi

echo "ikki honalik son: $son<br>";
echo "onlik honadagi raqamlar: $onlik<br>";
echo "birlik honadagi raqamlar: $birlik";
 ?>