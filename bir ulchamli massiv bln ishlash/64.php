<?php 
// 130
function massivSeryaldanKeyinNadrQushish(&$arr) {
	$n = count($arr);
	if ($n == 0) return;
	$serya = [];
	$joriyserya = [$arr[0]];

	// massivni seryalarini ajratamiz
	for ($i = 1; $i < $n; $i++) { 
		if ($arr[$i] == $arr[$I - 1]) {
			$joriyserya = [$arr[$i]];
		} else {
			$serya[] = $joriyserya;
			$joriyserya = [$arr[$i]];
		}
	}
	$serya[] = $joriyserya; // oxirgi seryani qo'shamiz

	// har bir seryaga yagni element qo'shish
	foreach ($serya as &$s) {
		$s[] = $s[0]; // seryaga uwa elementdan 1 tasini qo'shish uchun
	}

	// yangi massiv shaklantiramiz
	$newarray = [];
	foreach ($serya as $s) {
		foreach ($s as $val) {
			$newarray[] = $val;
		}
	}
	$arr = $newarray;
}
$inputArray = [1, 2, 2, 3, 3, 3, 3, 4, 4];
massivSeryaldanKeyinNadrQushish($inputArray);

echo "Natija: " . implode(", ", $inputArray);
?>
