<?php 

$a = 2; // metr
$uzunlik = 2;

switch ($uzunlik) {
	case '1':
		$natija = $a * 10; // Metrni disimetrda ifodalash 
		echo "$a metrimiz: $natija disimetr"; 
		break;
	
	case '2':
	    $natija = $a / 1000; // Metrni kilometrda ifodalash 
	    echo "$a metrimiz: $natija kilometr"; 
	    break;

	case '3':
	    $natija = $a; // metrimizni uzi
	    echo "$a metrimiz: $natija metr"; 
	    break;
	
	case '4':
	    $natija = $a * 1000;  // millimetrda ifodalash
	    echo "$a metrimiz: $natija millimetr";
	    break;
	
	case '5':
		$natija = $a * 100;  // santimetrda ifodalash
	    echo "$a metrimiz: $natija santimetr";
	    break;
	
	default:
	    echo "Xato:uzunlik bunday qiymatga ega emas"; 
}

























 ?>