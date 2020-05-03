<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Films </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <link rel="stylesheet" href="style/vod.css">
    </head>
    <body style="background-color:#fbb456;">
    
			
<nav>
		<ul>
			<li class="deroulant"><a href= "vod.html">Acceuil</a></li>
			<li class="deroulant"><a>Menu</a>
				<ul class="sous">
					<li><a href="consulterFilms.php">Consulter Les Films</a></li>
					<li><a href="saisieTitreRecherche.html">Rechrcher</a></li>
					<li><a href="saisieFilm.html">Ajouter un Film</a></li>
					<li><a href="saisieTitreSuppression.html">Supprimer un Film</a></li>
				</ul>
			</li>
		</ul>
</nav>			



				<?php
						$film = $_GET['nomFilm'] ;
						$lines = file("data/vod.csv");
						foreach($lines as $n => $line){
						
						
						$infos = explode( ":" , $line ) ;
						
						if ($film == $line) {
							
							
						echo $film;
						}
					
						else {
							echo"rien";
						}}
							?>

			
		</body>
		</html>
		
