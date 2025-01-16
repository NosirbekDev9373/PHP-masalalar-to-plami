  <?php
function masalaSoni($masala) {
    $birliklar = [
        0 => "", 1 => "bir", 2 => "ikki", 3 => "uch", 4 => "to'rt",
        5 => "besh", 6 => "olti", 7 => "yetti", 8 => "sakkiz", 9 => "to'qqiz"
    ];
    $onliklar = [
        1 => "o'n", 2 => "yigirma", 3 => "o'ttiz", 4 => "qirq", 5 => "ellik",
        6 => "oltmish"
    ];

    if ($masala < 10 || $masala > 40) {
        return "Faqat 10 dan 40 gacha bo'lgan yoshlar uchun!";
    }

    $onlik = floor($masala / 10); // O'nlik raqami
    $birlik = $masala % 10;       // Birlik raqami

    $result = $onliklar[$onlik]; // O'nlikni yozuvga o‘tkazamiz
    if ($birlik > 0) {
        $result .= " " . $birliklar[$birlik]; // Birlikni qo‘shamiz (agar mavjud bo‘lsa)
    }

    return $result . "ta masala";
}

// Misollarni tekshirish
echo masalaSoni(39);
?>
