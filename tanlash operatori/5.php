<?php 

$a = 4; // a qiymat
$b = 40; // b qiymat
$amal = 5;

switch ($amal) {
	case '1':
		$natija = $a + $b;
		echo "Qushish amali: $natija"; // amal 1 qushish
		break;
	
	case '2':
	    $natija = $a - $b;
	    echo "Ayirish amali: $natija"; // amal 2 ayirish
	    break;

	case '3':
	    if($b != 0){
	    $natija = $a / $b;
	    echo "Bulish amali: $natija"; // amal 3 bulish 
	    } else {
	    	echo "B 0 ga teng bulishi mumkin emas";
	    }
	    break;
	case '4':
	    $natija = $a * $b;  
	    echo "Ko'paytirish amali: $natija";  // amal 4 kupaytirish
	    break;
	default:
	    echo "Xato:Amal bunday qiymatga ega emas"; 
}

 ?>