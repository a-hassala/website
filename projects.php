 <?php include("lang.php");?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8" />
 	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 	<link rel="stylesheet" href="projects-style.css" />
 	<title>HASSALA Anasse WebSite</title>
 </head>



 <body>

 	<div class="container">
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


 		<div class="col-md-12 presentation">
 			<h1><span class="has">HAS</span><span class="nom">SALA <span class="prenom">Anasse</span> </span></h1>
 			<div class="projects"><?php echo $projects_content ?></div>
 		</div>


 	</div>










 </body>

 </html> 
