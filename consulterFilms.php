<!DOCTYPE html>
<html lang="fr"></html>
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
			
			
<h1>Liste des acteurs</h1><br/>
		
		<table bgcolor=black >
		
			<thead>
				
				<tr>
					
					<th>Nom</th>
					<th>Année</th>
					<th>Réalisateur</th>
				</tr>
				
			</thead>
			<tbody>
				
				<?php
					
						$lines = file("data/vod.csv");
						foreach($lines as $n => $line){
						
						
						echo "<tr>" ;
						
						$infos = explode( ":" , $line ) ;
						
						echo "<td>" . strtoupper( $infos[ 0 ] ) . "</td>" ;
						echo "<td>" . ucfirst( strtolower( $infos[ 1 ] ) ) . "</td>" ;
						echo "<td>" . ucwords( strtolower( $infos[ 2 ] ) ) . "</td>" ;
						
						echo "</tr>" ;
						
					}
				
				?>
				
			</tbody>
		</table>
			
			<a href= vod.html>Acceuil</a>
</html>
	</body>
