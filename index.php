 <?php include("lang.php");?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8" />
 	<link rel="stylesheet" href="style.css" />
 	<title>HASSALA Anasse WebSite</title>
 </head>



 <body>

 	<div class="left-container">
 		<nav class="navigation">
 			<ul>
 				<li><a href="about.php"> <?php echo $about ; ?></a></li>
 				<li><a href="projects.php"> <?php echo $projects ; ?></a></li>
 				<li><a href="contacts.php"> <?php echo $contacts ; ?></a></li>
 				<li><a href="cv.php"> <?php echo $cv ?> </a></li>
 			</ul>
 		</nav>
 	</div>


 	<div class="right-container">

 		<div class="header">
 			<h1> HASSALA Anasse</h1>
 			<div class="language">
 				<a href="index.php?lang=fr"><img alt="Drapeau de la France" src="http://www.drapeauxdespays.fr/data/flags/small/fr.png" width="120" height="80" /></a>
 				<a href="index.php?lang=en"><img alt="Drapeau du Royaume-Uni" src="http://www.drapeauxdespays.fr/data/flags/small/gb.png" width="160" height="80" /></a>
 				<a href="index.php?lang=es"><img alt="Drapeau de l'Espagne" src="http://www.drapeauxdespays.fr/data/flags/small/es.png" width="120" height="80" /></a>
 			</div>
 		</div>
 		<div class="presentation">
 			<?php echo $presentation ; ?>
 		</div>
 	</div>

 </div>










</body>

</html> 
