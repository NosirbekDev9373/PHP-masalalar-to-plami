<?php 
$a = 5; // kilogram
$ogirlik = 5;

switch ($ogirlik) {
	case '1':
	    $natija = $a; // kilogram uzi
	    echo "$a kg: $natija kilogram"; 
	    break;

	case '2':
		$natija = $a / 1000000; // milligramda ifodalash
		echo "$a kg: $natija milligramm"; 
		break;
	
	case '3':
	    $natija = $a * 1000; // gramda ifodalsh 
	    echo "$a kg: $natija gramm"; 
	    break;

	case '4':
	    $natija = $a / 1000;  // tonnada ifodalsh
	    echo "$a kg: $natija tonna";
	    break;
	
	case '5':
		$natija = $a / 100;  // sentnerda ifodalash
	    echo "$a kg: $natija sentener";
	    break;
	
	default:
	    echo "Xato:uzunlik bunday qiymatga ega emas"; 
}






 ?>