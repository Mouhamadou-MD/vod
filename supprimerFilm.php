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
					$filmTrouve = FALSE ;

$films = array() ;
$src = fopen( "data/vod.csv" , "r" ) ;

while( ! feof( $src ) ){
$ligne = fgets( $src ) ;
$ligne = rtrim( $ligne ) ;
if( $ligne != "" ){
$infos = explode( ":" , $ligne ) ;

if( $infos[0] != $_POST["titre"] ){

array_push( $ligne , $films ) ;
}
else {

$filmTrouve = TRUE ;
}
}
}
fclose( $src ) ;
if( $filmTrouve == TRUE ){

$dst = fopen( "data/vod.csv" , "w" ) ;

foreach( $films as $unFilm ){
fwrite( $dst , $unFilm . "\n" ) ;
}
fclose( $dst ) ;
echo "Film supprimé.<br/>" ;
}
else {
echo "Film non trouvé.<br/>"
}

?>
						
						
					
				
				
			</tbody>
		</table>
			
		
</html>
	</body>
