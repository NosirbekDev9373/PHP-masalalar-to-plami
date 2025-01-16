<?php
$M = 11; 
$D = 20;
switch ($M) {
    case 1:
        if ($D >= 20) {
            $burj = "Qovg'a";
        } else {
            $burj = "Echki";
        }
        break;
    case 2:      // Fevral
        if ($D <= 18) {
            $burj = "Qovg'a";
        } else {
            $burj = "Baliq";
        }
        break;
    case 3: // Mart
        if ($D <= 20) {
            $burj = "Baliq";
        } else {
            $burj = "Qo'y";
        }
        break;
    case 4: // Aprel
        if ($D <= 19) {
            $burj = "Qo'y";
        } else {
            $burj = "Buzoq";
        }
        break;
    case 5: // May
        if ($D <= 20) {
            $burj = "Buzoq";
        } else {
            $burj = "Egizaklar";
        }
        break;
    case 6: // Iyun
        if ($D <= 21) {
            $burj = "Egizaklar";
        } else {
            $burj = "Qisqichbaqa";
        }
        break;
    case 7: // Iyul
        if ($D <= 22) {
            $burj = "Qisqichbaqa";
        } else {
            $burj = "Arslon";
        }
        break;
    case 8: // Avgust
        if ($D <= 22) {
            $burj = "Arslon";
        } else {
            $burj = "Parizod";
        }
        break;
    case 9: // Sentabr
        if ($D <= 22) {
            $burj = "Parizod";
        } else {
            $burj = "Tarozi";
        }
        break;
    case 10: // Oktabr
        if ($D <= 22) {
            $burj = "Tarozi";
        } else {
            $burj = "Chayon";
        }
        break;
    case 11: // Noyabr
        if ($D <= 21) {
            $burj = "Chayon";
        } else {
            $burj = "O'qotar";
        }
        break;
    case 12: // Dekabr
        if ($D <= 21) {
            $burj = "O'qotar";
        } else {
            $burj = "Echki";
        }
        break;
    default:
        $burj = "Noto'g'ri sana!";
}


    

echo $burj;