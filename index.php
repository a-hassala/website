 <?php include("lang.php");?>
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
 			<tr><a href="index.php?lang=fr"><img src="Images/fr.png" height="14" width="20" alt="français"/></a></tr>
 			<tr><span>   </span></tr>
 			<tr><a href="index.php?lang=en"><img src="Images/uk.jpg" height="14" width="20" alt="english"/></a></tr>
 			<tr><span>   </span></tr>
 			<tr><a href="index.php?lang=es"><img src="Images/es.png" height="14" width="20" alt="español"/></a></tr>
 		</table>
 	</div>

 	<nav id="navigation">
 		<table>
 			<tr><a href="about.php"> <?php echo $about ; ?> |</a></tr>
 			<tr><a href="projects.php"> <?php echo $projects ; ?> |</a></tr>
 			<tr><a href="contacts.php"> <?php echo $contacts ; ?> |</a></tr>
 			<tr><a href="cv.php"> <?php echo $cv ?> </a></tr>
 		</table>
 	</nav>

 	<p class="presentation">


 	</p>


 </body>

 </html> 
