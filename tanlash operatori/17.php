<?php

function yoshYozuvi($yosh) {
    $onlik = floor($yosh / 10); // O'nlik raqami
    $birlik = $yosh % 10;       // Birlik raqami
    $result = '';

    if ($yosh < 20 || $yosh > 69) {
        return "Faqat 20 dan 69 gacha bo'lgan yoshlar uchun!";
    }
    switch ($onlik) {
        case 2:
            $result .= "yigirma "; 
            break;
        case 3:
            $result .= "o'ttiz "; 
            break;
        case 4:
            $result .= "qirq ";
            break;
        case 5:
            $result .= "ellik ";
            break;
        case 6:
            $result .= "oltmish ";
            break;
    }

    if ($birlik > 0) {

        switch ($birlik) {
            case 1: $result .= "bir"; break; case 2: $result .= "ikki"; break; case 3: $result .= "uch"; break; case 4: $result .= "to'rt"; break; case 5: $result .= "besh"; break; case 6: $result .= "olti"; break; case 7: $result .= "yetti"; break; case 8: $result .= "sakkiz"; break; case 9: $result .= "to'qqiz"; break;

        }
    }

    return $result . " yosh";
}

// Misollarni tekshirish
echo yoshYozuvi(69);