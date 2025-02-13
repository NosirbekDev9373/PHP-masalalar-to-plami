<?php 
// $_GET
// $_POST	 
//var_dump($_GET['name']);
$name = $_POST['name'];
$sur_name = $_POST['sur_name']
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<div>Sizning ismingiz:<?= $name ?></div>
	<div>Sizning familyangiz:<?= $sur_name ?></div>

</body>
</html>