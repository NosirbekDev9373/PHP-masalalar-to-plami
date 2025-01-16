<?php 
// 1 dan 7 sonlar berilgan nomlar bilan hafta kunlarini chiqar
$k = 5;
$kunlar =($k >= 1 && $k <= 5); 

switch ($k) {
	case '1':
		echo '1-yomon';
		break;
	case '2':
	    echo '2-qoniqarsiz';
	    break;
	case '3':
		echo '3-qoniqarli';
		break;
	case '4':
	    echo '4-yaxshi';
	    break;
	case '5':
		echo '5-a\'lo';
		break;
    default:
        echo 'XATO';

}

 


 ?>