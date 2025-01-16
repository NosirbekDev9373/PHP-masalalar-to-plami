<?php 

function kartaNominiAniqlash($N, $M) {
	// karta qiymatlarini belgilaymiz

	switch ($N) {
		case '6': $qiymat = "olti";	break;
		case '7': $qiymat = "yetti"; break;
		case '8': $qiymat = "sakkiz"; break;
		case '9': $qiymat = "to'qqiz"; break;
		case '10': $qiymat = "o'n";	break;
		case '11': $qiymat = "valet"; break;
		case '12': $qiymat = "dama"; break;
		case '13': $qiymat = "qirol"; break;
		case '14': $qiymat = "tuz";	break;		
		default: return "Notog'ri karta qiymat"; break;
	}
	//  karta turini belgilaymiz
	switch ($M) {
		case '1': $kartaturi = "g'isht"; break;
		case '2': $kartaturi = "olma"; break;
		case '3': $kartaturi = "chillak"; break;
		case '4': $kartaturi = "qarg'a"; break;
		default: return "Bunday karta turi mavjud emas"; break;
	}
	// natijani saqlaymiz
	return $qiymat . " " . $kartaturi ;
}
echo kartaNominiAniqlash(14, 4);

 ?>