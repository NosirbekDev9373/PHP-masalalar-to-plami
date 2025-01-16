<?php 
function qiymat($case, $value) {
	$pi = 3.14;

	switch ($case) {
		case '1':           // radiusni topamiz 
			$r = $value;
			$d = 2 * $r;
			$l = 2 * $pi * $r;
			$s = $pi * pow($r, 2);
			break;
		case '2':
			$d = $value;     // diametrni topamiz
			$r = $d / 2;
			$l = 2 * $pi * $r;
			$s = $pi * pow($r, 2);
			break;
		case '3':
			$l = $value;      // uzunlikni topamiz
			$r = $L / (2 * $pi);
            $d = 2 * $R;
            $s = $pi * pow($R, 2); 
			break;
		case '4':
			$s = $value;      // yuzasini topamiz
            $r = sqrt($S / $pi);
            $d = 2 * $R;
            $l = 2 * $pi * $R;
			break;
		default:
			return "Xato son kiritilgan";
	}
  //  natijalarni chiqaramiz

	return ['R' => $r,
	        'D' => $d, 
	        'L' => $l, 
	        'S' => $s
	    ];
}
// qiymatlar va javoblarni kiritamiz
$case = 1;
$value = 5;
$natija = qiymat($case, $value);
echo "Doiraning elementlari:" . '<br>';
echo "Radius (R): " . $natija['R'] . '<br>' ;
echo "Diametr (D): " . $natija['D'] . '<br>' ;
echo "Uzunlik (L): " . $natija['L'] . '<br>' ;
echo "Yuzasi (S): " . $natija['S'] . '<br>' ;


?>








