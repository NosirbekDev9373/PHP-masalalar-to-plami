<?php

function yoshYozuvi($yosh) {
    $yuzlik = floor($yosh / 100);
    $onlik = (floor($yosh / 10)) % 10; // O'nlik raqami
    $birlik = $yosh % 10;       // Birlik raqami
    $result = '';

    if ($yosh < 100 || $yosh > 999) {
        return "Faqat 100 dan 999 gacha bo'lgan sonlar kiradi";
    }
    switch ($yuzlik) {
        case 1:
            $result .= "bir yuz ";
            break;
        case 2:
            $result .= "ikki yuz "; 
            break;
        case 3:
            $result .= "uch yuz "; 
            break;
        case 4:
            $result .= "to'rt yuz "; 
            break;
        case 5:
            $result .= "besh yuz ";
            break;
        case 6:
            $result .= "olti yuz ";
            break;
        case 7:
            $result .= "yetti yuz "; 
            break;
        case 8:
            $result .= "sakkiz yuz "; 
            break;
        case 9:
            $result .= "to'qqiz yuz ";
            break;
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
        case 7:
            $result .= "yetmish "; 
            break;
        case 8:
            $result .= "saksok ";
            break;
        case 9:
            $result .= "tuqson ";
            break;
    }

    if ($birlik > 0) {

        switch ($birlik) {
            case 1: 
                $result .= "bir"; 
                break; 
            case 2: 
                $result .= "ikki"; 
                break; 
            case 3: 
                $result .= "uch";
                break;
            case 4: 
                $result .= "to'rt"; 
                break; 
            case 5: 
                $result .= "besh"; 
                break; 
            case 6: 
                $result .= "olti"; 
                break; 
            case 7: 
                $result .= "yetti"; 
                break; 
            case 8: 
                $result .= "sakkiz"; 
                break; 
            case 9: 
                $result .= "to'qqiz"; 
                break;

        }
    }

    return $result ;
}

// Misollarni tekshirish
echo yoshYozuvi(999);