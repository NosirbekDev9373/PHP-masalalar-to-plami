<?php 
// 3honali son ketma ket usuvchi yoki kamayuvchi tartibda joylash

function text($son) {
	// uch honali son bulish sharti
	if($son < 100 || $son > 999) {
		echo "berilgan sonimiz uch honali son emas";
	}
	 // raqamlarni ajratamiz 

	$uch = (int) ($son / 100); // yuzliklar honasi
	$ikki = (int) (($son % 100) / 10); // unliklar honasi
	$bir = $son % 10; // birliklar honasii

	if(($bir > $ikki && $ikki > $uch) || ($bir < $ikki && $ikki < $uch))
	{
		echo "sonimiz usib borish tartibida yoki kanayaib borish tartibida";
	} else
	{
		echo "sonimiz usib borish tartibida yoki kanayaib borish tartibida emas";
	}
}
$son = 346;
 echo text($son);