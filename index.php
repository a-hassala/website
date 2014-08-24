 <?php
 if (isset($_GET['lang'])){
 	$lang=strip_tags($_GET['lang']);

 }
 
 else{
 	$lang='fr';
 }
 
 switch($lang){

 	case('fr'):
 	$about='Présentation';
 	$projects='Projets';
 	$cv='CV';
 	break;

 	case('en'):
 	$about='About Me';
 	$projects='Projects';
 	$cv='Resume';
 	break;
 }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8" />
 	<link rel="stylesheet" href="style.css" />
 	<title>HASSALA Anasse WebSite</title>
 </head>



 <body>
 	<div id="navigation_lang">
 		<table>
 			<tr><a href="index.php?lang=fr"><img src="Images/france.png" alt="français"/></a></tr>
 			<tr><a href="index.php?lang=en"><img src="Images/uk.jpg" height="14" width="20" alt="english"/></a></tr>
 		</table>
 	</div>

 	<nav id="navigation">
 		<table>
 			<tr><a href="about.php"> <?php echo $about ?> |</a></tr>
 			<tr><a href="projects.php"> <?php echo $projects ?> |</a></tr>
 			<tr><a href="contacts.php"> Contact |</a></tr>
 			<tr><a href="cv.php"> <?php echo $cv ?> </a></tr>
 		</table>
 	</nav>

 	<p class="presentation"> Bonjour je m'appelle toto et j'aime les poule </p>


 </body>

 </html> 
