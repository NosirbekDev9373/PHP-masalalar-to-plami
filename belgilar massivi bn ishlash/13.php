<?php 
// HTML bilan ishlash
$car = 'cherry';
$foods = ['Norin', 'Manti', 'Osh', 'Somsa'];
$best = 'best';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<h1>Salom</h1>	
	<p>Mening yoqtirgan mashinam bu - <?= $car; ?></p>
    <h3>taomlar <?= $best; ?></h3>
    <ul>
    	<?php foreach ($foods as $food): ?>
    		<li><?= $food ?></li>
    	<?php endforeach; ?>
    </ul>
    <h5><?= 'Bu echo ni qisqartirilgani = '; ?></h5>	


</body>
</html>