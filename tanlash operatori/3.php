<?php 
 // 
$k = 4;
$kunlar =($k >= 1 && $k <= 12); 

switch ($k) {
	case '12':
	    echo '12-oy qish fasli';
	    break;
	case '1':
	    echo '1-oy qish fasli';
	    break;
	case '2':
		echo '2-oy qish fasli';
		break;
	case '3':
	    echo '3-oy bahor fasli';
	    break;
	case '4':
		echo '4-oy bahor fasli';
		break;
	case '5':
	    echo '5-oy bahor fasli';
	    break;
	case '6':
		echo '6-oy yoz fasli';
		break;
	case '7':
	    echo '7-oy yoz fasli';
	    break;
	case '8':
		echo '8-oy yoz fasli';
		break;
	case '9':
	    echo '9-oy kuz fasli';
	    break;
	case '10':
		echo '10-oy kuz	fasli';
		break;
	case '11':
	    echo '11-oy kuz fasli';
	    break;
    default:
        echo 'XATO';

} 



 ?>