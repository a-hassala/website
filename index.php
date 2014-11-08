 <?php include("lang.php");?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8" />
 	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 	<link rel="stylesheet" href="style.css" />
 	<title>HASSALA Anasse WebSite</title>
 </head>



 <body>

 	<div class="container">
 		<div class="row">
 			<div class="col-lg-3 signature">
 				<img src="Images/HA.png" alt="Signature">
 				<div class="row">
 					<nav class="col-lg-3 navigation">
 						<ul>



 							<li class="nav-about"><a href="index.php"> <?php echo $about ; ?></a></li>


 							<li class="nav-projects"><a href="projects.php"> <?php echo $projects ; ?></a></li>
 							
 							<li class="nav-cv"><a href="cv.php"> <?php echo $cv ?> </a></li>

 							<li class="nav-contacts"><a href="contacts.php"> <?php echo $contacts ; ?></a></li>
 							


 							
 							

 						</ul>
 					</nav>
 				</div>

 				<footer>
 					<ul>
 						<li><a href="https://www.linkedin.com/profile/view?id=364827678&trk=nav_responsive_tab_profile_pic" target="_blank"><img src="Images/linkedin.png" alt="in"></a></li>
 						<li><a href="https://plus.google.com/114603067289499766106/posts?hl=fr" target="_blank"><img src="Images/google.png" alt="G+"></a></li>
 						<li><a href="https://twitter.com/AnassHassala" target="_blank"><img src="Images/twitter.png" alt="Twitter"></a></li>
 						<li><a href="https://facebook.com/anass.hassala" target="_blank"><img src="Images/facebook.png" alt="f"></a></li>
 					</ul>
 				</footer>
 			</div>


 			<div class="col-md-9 presentation">
 				<h1><span class="nom">HASSALA</span> <span class="prenom">Anasse</span></h1>
 				<div class="trait-titre"> </div>
 				<h2 class="subtitle"><?php echo $subtitle ?> </h2>
 				<img src="Images/me.png" alt="Photo perso">
 				<?php echo $presentation ?>
 			</div>
 		</div>


 	</div>










 </body>

 </html> 
