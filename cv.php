<?php
session_start();

if (isset($_GET['lang'])){
  $_SESSION['lang']=strip_tags($_GET['lang']);

}

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
            <h1><span class="nom"><?php echo $my; ?></span> <span class="prenom"><?php echo $project; ?></span></h1>
            <div class="projets">
            <?php// echo $projects_content ?>
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><?php echo $toggle; ?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
</body>
</html>