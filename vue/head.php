<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PMU</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php


if(isset($_GET['color'])) {
    $style = $_GET['color'];
	setcookie("color", $style, time()+(60*60*24*30));
	header('location:accueil.php');
} else {
    if(isset($_COOKIE['color'])) {
        $style = 'https://bootswatch.com/4/'.$_COOKIE['color'].'/bootstrap.min.css';
    } else {
        $style = 'https://bootswatch.com/4/cyborg/bootstrap.min.css';
    }
}

	echo'<link rel="stylesheet" href="'.$style.'">'?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>

<body>

	