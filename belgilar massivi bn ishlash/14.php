<?php 
// buyruq berish
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$sur_name = $_POST['sur_name'];
}

 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Forma bilan ishlash</title>
 </head>
 <body>
 	<form method="POST" action="">
 		<h4>To'ldiring</h4>
 		<div>
 		    <label>Ismingiz</label>
 		    <input type="text" name="name">
 		</div>
 		<div>
 		    <label>Familiyangiz</label>
 		    <input type="text" name="sur_name">
 		</div>
 		<div>
 			<button type="submit">Jo'natish</button>
 		</div>    
 	</form>
 	<div>
 		<div>Sizning ismingiz: <?= $name ?? '' ?></div>
 		<div>Sizning familiyangiz: <?= $sur_name ?? '' ?></div>
 	</div>
 
 </body>
 </html> 