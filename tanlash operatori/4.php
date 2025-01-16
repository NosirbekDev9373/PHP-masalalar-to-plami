<?php
// Oy raqamini foydalanuvchidan kiritib olish

$oyRaqami = 1;

// Oyga mos kunlar sonini aniqlash
switch ($oyRaqami) {
    case 1: // Yanvar
    case 3: // Mart
    case 5: // May
    case 7: // Iyul
    case 8: // Avgust
    case 10: // Oktyabr
    case 12: // Dekabr
        echo "Bu oydagi kunlar soni: 31";
        break;
    case 4: // Aprel
    case 6: // Iyun
    case 9: // Sentabr
    case 11: // Noyabr
        echo "Bu oydagi kunlar soni: 30";
        break;
    case 2: // Fevral
        echo "4 yida 1marta kelishini hisobga olish kerak.";
        echo "Agar 4 yilda 1marta keladigan yili bo'lsa, bu oyda 29 kun, aks holda 28 kun bo'ladi.";
        break;
    default:
        echo "Noto'g'ri oy raqami kiritildi! Iltimos, 1 dan 12 gacha raqam kiriting.";
        break;
}
?>