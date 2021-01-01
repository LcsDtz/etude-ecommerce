<?php 

   if(isset($_GET["deconnexion"])){
	session_destroy();
	header('location: connexion.php');
	exit;
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" href="accueil.php">PMU</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="accueil.php">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="conseils.php">Conseils</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="panier.php">Panier</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="compte.php">Compte</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="commandes.php">Commandes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?deconnexion=oui">Deconnexion</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left:71px;">Thème</a>
				<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 39px, 0px);">
					<?php
						echo '<a class="dropdown-item" href="accueil.php?color=cerulean">Cerulean</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=cosmo">Cosmo</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=cyborg">Cyborg</a>';												
						echo '<a class="dropdown-item" href="accueil.php?color=darkly">Darkly</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=flatly">Flatly</a>';												
						echo '<a class="dropdown-item" href="accueil.php?color=journal">Journal</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=litera">Litera</a>';												
						echo '<a class="dropdown-item" href="accueil.php?color=lumen">Lumen</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=lux">Lux</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=materia">Materia</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=minty">Minty</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=pulse">Pulse</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=sandstone">Sandstone</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=simplex">Simplex</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=sketchy">Sketchy</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=slate">Slate</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=solar">Solar</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=spacelab">Spacelab</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=superhero">Superhero</a>';						
						echo '<a class="dropdown-item" href="accueil.php?color=united">United</a>';						
                        echo '<a class="dropdown-item" href="accueil.php?color=yeti">Yeti</a>';
                    ?>
            </div>
    </li>
			</ul>

		</form>

		</div>
	</nav>