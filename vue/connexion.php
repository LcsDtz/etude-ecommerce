<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PMU</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
</head>
<body>
    <center>
        <form method="post" action="../modele/Connexion.php">
            <h4>Pseudo</h4>
            <input class="form-control" type="text" name="Pseudo" style="width:200px;margin-top:-10px;">
            <h4>Password</h4>
            <input class="form-control" type="password" name="password" style="width:200px;margin-top:-10px;">
            
            <input class="btn btn-primary" type="submit" name="submit" value="Valider">
            <a href="inscription.php"> <h5>Inscription</h5></a>
        </form>
    </center>
    </body>
    </html>