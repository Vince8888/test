<!DOCTYPE html>
<html>

<head>
	<title>Présence du cookie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body>
	<?php
	// Suppression d'un cookie 
	unset($_COOKIE['id']);
	setcookie('id', '', -1);


	if (!empty($_COOKIE['id'])) {
		echo "<h1>Bienvenue " . $_COOKIE['id'] . "</h1>";
	} else {
		echo "<h1>Vous devez vous identifiez</h1>";
	}

	?>
</body>

</html>