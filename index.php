<?php include("lang.php");?>
<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="HASSALA Anasse">

	<title>HASSALA Anasse</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<!-- My Css -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    	<div id="wrapper">

    		<!-- Sidebar -->
    		<div id="sidebar-wrapper">
    			<img id="HA" src="Images/HA.png" alt="Signature">
    			<ul class="sidebar-nav">
    				<li class="nav-about"><a href="index.php"> <?php echo $about ; ?></a></li>
    				<li class="nav-projects"><a href="projects.php"> <?php echo $projects ; ?></a></li>
    				<li class="nav-cv"><a href="cv.php"> <?php echo $cv ?> </a></li>
    				<li class="nav-contacts"><a href="contacts.php"> <?php echo $contacts ; ?></a></li>
    				<li class="footer"><a href="https://www.linkedin.com/profile/view?id=364827678&trk=nav_responsive_tab_profile_pic" target="_blank"><img src="Images/linkedin.png" alt="in"></a></li>
    				<li class="footer"><a href="https://plus.google.com/114603067289499766106/posts?hl=fr" target="_blank"><img src="Images/google.png" alt="G+"></a></li>
    				<li class="footer"><a href="https://twitter.com/AnassHassala" target="_blank"><img src="Images/twitter.png" alt="Twitter"></a></li>
    				<li class="footer"><a href="https://facebook.com/anass.hassala" target="_blank"><img src="Images/facebook.png" alt="f"></a></li>

    			</ul>
    				
    		</div>
    		<!-- /#sidebar-wrapper -->

    		<!-- Page Content -->
    		<div id="page-content-wrapper">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-lg-12">
    						<h1><span class="nom">HASSALA</span> <span class="prenom">Anasse</span></h1>
    						<div class="trait-titre"> </div>
    						<h2 class="subtitle"><?php echo $subtitle ?> </h2>
    						<img id="moi" src="Images/me.png" alt="Photo perso">
    						<?php echo $presentation ?>
    						<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- /#page-content-wrapper -->

    	</div>
    	<!-- /#wrapper -->

    	<!-- jQuery -->
    	<script src="js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

    	<!-- Menu Toggle Script -->
    	<script>
    		$("#menu-toggle").click(function(e) {
    			e.preventDefault();
    			$("#wrapper").toggleClass("toggled");
    		});
    	</script>

    </body>

    </html>
