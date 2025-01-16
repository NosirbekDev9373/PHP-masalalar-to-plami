<?php 

$kun = 12; //  kunlar 
$oykun = 6; // Oylar kuni

switch ($oykun) {
	case '1':

	if($kun <= 31) {
    	echo "$kun - Yanvar";
    }else {
    	echo "bunday sana mavjud emas";
    }
		break;
	
	case '2':

    if($kun <= 28) {
    	echo "$kun - Fevral";
    }else {
    	echo "bunday sana mavjud emas";
    }
	    break;

	case '3':

	if($kun <= 31) {
    	echo "$kun - Mart";
    }else {
    	echo "bunday sana mavjud emas";
	}	
		break;

	case '4':

	if($kun <= 30) {
    	echo "$kun - aprel";
    }else {
    	echo "bunday sana mavjud emas";
	}	
		break;

	case '5':

	if($kun <= 31) {
    	echo "$kun - May";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '6':

	if($kun <= 30) {
    	echo "$kun - Iyun";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '7':

	if($kun <= 31) {
    	echo "$kun - Iyul";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '8':

	if($kun <= 31) {
    	echo "$kun - Avgust";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '9':

	if($kun <= 30) {
    	echo "$kun - Sentabr";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '10':

	if($kun <= 31) {
    	echo "$kun - Oktabr";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '11':

	if($kun <= 30) {
    	echo "$kun - Noyabr";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;

	case '12':

	if($kun <= 31) {
    	echo "$kun - Dekabr";
    }else {
    	echo "bunday sana mavjud emas";
	}
		break;
	
	default:
	    echo "bunday oy mavjud emas";
}


 ?>