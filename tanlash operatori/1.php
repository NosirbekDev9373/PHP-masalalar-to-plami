<?php 
// 1 dan 7 sonlar berilgan nomlar bilan hafta kunlarini chiqar
$x = 7;
$kunlar =($x >= 1 && $x <= 7); 

switch ($x) {
	case '1':
		echo 'Dushanba';
		break;
	case '2':
	    echo 'Seshanba';
	    break;
	case '3':
		echo 'Chorshanba';
		break;
	case '4':
	    echo 'Payshanba';
	    break;
	case '5':
		echo 'Juma';
		break;
   case '6':
        echo ' Shanba';
        break;
    case '7':
        echo 'Yakshanba';
        break;
    default:
        echo 'ERROR';

}

 ?>