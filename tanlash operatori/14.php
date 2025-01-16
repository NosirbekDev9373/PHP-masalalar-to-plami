<?php 
function qiymat($case, $value) {

	switch ($case) {
		case '1':
			$a = $value;
			$r1 = $a * sqrt(3) / 6;
			$r2 = 2 * $r1;
			$s = $a * $a * sqrt(3) / 4;
			break;
		case '2':
			$r1 = $value;
			$a = (6 * $r1) / sqrt(3);
			$r2 = 2 * $r1;
			$s = $a * $a * sqrt(3) / 4;
			break;
		case '3':
		    $r2 = $value;
		    $a = (6 * $r1) / sqrt(3);
		    $r1 = $r2 / 2;
		    $s = $a * $a * sqrt(3) / 4;
			break;
		case '4':
			$s = $value;
			$a = sqrt((4 * $s) / sqrt(3));
			$r1 = $a * sqrt(3) / 6;
			$r2 = 2 * $r1;   
			break;
		
		default:
			return 'Xato qiymat kiritildi';
			break;
	}
	// Natijalarni  qaytaramiz
	return ['A' => $a, 'R1' => $r1, 'R2' => $r2, 'S' => $s];
}

// Masala uchun test
$case = 2; // Berilgan element turi 
$value = 10; // Element qiymati

$natija = qiymat($case, $value);
echo "Teng tomonli uchburchak elementlari" . '<br>';
echo "Kateti (A):" . $natija['A'] . '<br>';
echo "Ichki chizilgan aylana radiusi (R1):" . $natija['R1'] . '<br>';
echo "Tashqi chizilgan aylana radiusi (R2):" . $natija['R2'] . '<br>';
echo "Yuzasi (S)" . $natija['S'];
 ?>