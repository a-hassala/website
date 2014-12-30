<?php
session_start();

if (isset($_GET['lang'])){
  $_SESSION['lang']=strip_tags($_GET['lang']);

}

$a = mt_rand(0,17);
$b = mt_rand(5,10);

$_SESSION['a']=$a;
$_SESSION['b']=$b;

include("lang.php");

include_once 'header.php';
?>

<body>

  <div id="wrapper">

    <?php include_once 'sidebar.php'; ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav id="nav-lang"><?php include_once 'nav-lang.php';?></nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <h1><span class="nom">HASSALA </span> <span class="prenom"> Anasse</span></h1>
            <h2 class="subtitle"><?php echo $my. ' '. $project; ?></h2>
            <div class="projets">
            <?php echo $projects_content ?>
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><?php echo $toggle; ?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

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