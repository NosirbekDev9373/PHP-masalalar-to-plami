<?php 
// Haftaning birinchi kuni (1-yanvar dushanba deb qabul qilamiz)
$bosh_kun = 2; // 1- kunimiz seshamba

// Berilgan K kuni (1-365 oralig'ida)
$K = 336; // Masalan, 174-kun

// Haftaning qaysi kuni ekanligini hisoblash
$natija = ($bosh_kun + ($K - 1)) % 7;

// switch operatoridan foydalanamiz
switch ($natija) {
    case 0:
        echo 'yakshanba';
        break;
    case 1:
        echo 'dushanba';
        break;
    case 2:
        echo 'seshanba';
        break;
    case 3:
        echo 'chorshanba';
        break;
    case 4:
        echo 'payshanba';
        break;
    case 5:
        echo 'juma';
        break;
    case 6:
        echo 'shanba';
        break;
    default:
        echo 'Xato: K kiritilgan qiymati noto‘g‘ri!';
}


 ?>