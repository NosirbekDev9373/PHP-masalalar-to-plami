<?php 
// 2honali  son berilgan uning raqamlari yigindisi hisob

$son = 76;

$onlik = intdiv($son, 10); // indiv bu butun bulishni qaytaradi

$birlik = $son % 10; // % qoldiqni oladi

$yigindi = $birlik + $onlik;
echo "$yigindi";

?>