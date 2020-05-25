<!DOCTYPE html>
<html lang="fr"></html>
    <head>
        <title>Ajout</title>
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
			
			
<h1>Infos</h1><br/>
		
	
				
				<?php
			$dst = fopen( "data/vod.csv" , "a" ) ;
			$ligne = $_POST["titre"] . ":" . $_POST["annee"] . ":" .
		$_POST["realisateur"] . "\n" ;
		fwrite( $dst , $ligne ) ;
		fclose( $dst ) ;
		echo "Titre : " . $_POST["titre"] . "<br/>" ;
		echo "Année : " . $_POST["annee"] . "<br/>" ;
		echo "Réalisateur : " . $_POST["realisateur"] . "<br/>" ;
?>
						
						
					
				
				
			</tbody>
		</table>
			
		
</html>
	</body>
