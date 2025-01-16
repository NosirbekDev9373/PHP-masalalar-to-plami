<?php
function qiymat($case, $value) {
   
    switch ($case) {
        case 1: // katet berilgan
            $a = $value;
            $c = $a * sqrt(2);
            $h = $c / 2;
            $s = ($c * $h) / 2;
            break;
        case 2: // gipatenuzani berilgan
            $c = $value;
            $a = $c / sqrt(2);
            $h = $c / 2;
            $s = ($c * $h) / 2;            
            break;
        case 3: // balandlik berilgan
            $h = $value;
            $a = $c / sqrt(2);
            $c = 2 * $h;  
            $s = ($c * $h) / 2;
            break;
        case 4: // Yuzasi berilgan
            $s = $value;
            $c = $a * sqrt(2);
            $h = $c / 2;
            $a = (2 * $s) / sqrt(2);
            break;
        default:
            return "Noto'g'ri case kiritildi!";
    }

    // Natijalarni qaytarish
    return [
        'A' => $a,
        'C' => $c,
        'H' => $h,
        'S' => $s
    ];
}

// Masala uchun test
$case = 1; //  uchburchak tomon , yuzalar beriladigan qiymat
$value = 10; // Element qiymati

$natija = qiymat($case, $value);
echo "Teng yonli uchburchak elementlari:" . '<br>';
echo "Kateti (A): " . $natija['A'] . '<br>';
echo "Gipotenuzasi (C): " . $natija['C'] . '<br>';
echo "Balandligi (H): " . $natija['H'] . '<br>';
echo "Yuzasi (S): " . $natija['S'] . '<br>';
?>


