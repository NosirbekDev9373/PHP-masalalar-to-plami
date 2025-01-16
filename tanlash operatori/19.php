<?php
function muchalAniqla($yil) {
    // Ranglar va hayvonlar ro'yxati
    

    // 1984-yil Sharq kalendarida boshlanishi uchun yilni qoldiq orqali 60 yillik davrga keltiramiz
    $boshlangichYil = 1984;
    $davrQoldiq = ($yil - $boshlangichYil) % 60;

    // Salbiy yillarni to'g'ri ko'rish uchun (qoldiq manfiy bo'lishi mumkin)
    if ($davrQoldiq < 0) {
        $davrQoldiq += 60;
    }

    // Rang va hayvonni aniqlash
    $rangIndex = $davrQoldiq % 5; // Ranglar soni - 5
    $hayvonIndex = $davrQoldiq % 12; // Hayvonlar soni - 12

    // Rang va hayvonni olish uchun switch ishlatamiz
    $rang = '';
    $hayvon = '';

    // Rangni aniqlash
    switch ($rangIndex) {
        case 0:
            $rang = "Yashil "; // Yashil
            break;
        case 1:
            $rang = "Qizil "; // Qizil
            break;
        case 2:
            $rang = "Sariq "; // Sariq
            break;
        case 3:
            $rang = "Oq "; // Oq
            break;
        case 4:
            $rang = "Qora "; // Qora
            break;
    }

    // Hayvonni aniqlash
    switch ($hayvonIndex) {
        case 0:
            $hayvon = "Sichqon "; // Sichqon
            break;
        case 1:
            $hayvon = "Sigir "; // Sigir
            break;
        case 2:
            $hayvon = "Yo’lbars "; // Yo’lbars
            break;
        case 3:
            $hayvon = "Quyon "; // Quyon
            break;
        case 4:
            $hayvon = "Ajdar "; // Ajdar
            break;
        case 5:
            $hayvon = "Ilon "; // Ilon
            break;
        case 6:
            $hayvon = "Ot "; // Ot
            break;
        case 7:
            $hayvon = "Qo’y "; // Qo’y
            break;
        case 8:
            $hayvon = "Maymun "; // Maymun
            break;
        case 9:
            $hayvon = "Tovuq "; // Tovuq
            break;
        case 10:
            $hayvon = "It "; // It
            break;
        case 11:
            $hayvon = "To’ng’iz "; // To’ng’iz
            break;
    }

    return "$rang $hayvon yili";
}

// Misol uchun
$yil = 2050;
echo "Berilgan yil: $yil " . muchalAniqla($yil);
