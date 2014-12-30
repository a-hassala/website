<?php

session_start();

if (isset($_GET['lang'])){
  $_SESSION['lang']=strip_tags($_GET['lang']);

}

if(!isset($_POST['human'])){

$a = mt_rand(0,17);
$b = mt_rand(5,10);
$_SESSION['a']=$a;
$_SESSION['b']=$b;

}
include_once 'header.php';
include_once 'lang.php';
?>
<body id ="contact-form">

 <div id="wrapper">

  <?php include_once 'sidebar.php'; ?>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <nav id="nav-lang"><?php include_once 'nav-lang.php';?></nav>
    <div class="container-fluid">
      <div class="row">
       <div class="col-lg-12">
        <h2 class="subtitle"> <?php echo $contact_form ; ?> </h2>
        <form method="post" action="contacts.php">

          <label><?php echo $nom; ?></label>
          <input name="name" required="required">

          <label><?php echo $adresse; ?></label>
          <input name="email" type="email" required="required">

          <label id="message"><?php echo $lettre; ?></label>
          <textarea  name="message"></textarea>

          <label><?php echo $humain; ?></label>
          <input name="human" required="required">

          <input id="submit" name="submit" type="submit" value=<?php echo $envoyer; ?>>

        </form>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><?php echo $toggle; ?></a>

      </div>
    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<?php

$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '' ;
isset($_POST['email']) ? $email  = strip_tags($_POST['email']) : $email ='' ;
$valid_email = preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/',$email) == 1 ? true : false ;
isset($_POST['message']) ? $message  = strip_tags($_POST['message']) : $message ='' ;
isset($_POST['submit']) ? $submit  = strip_tags($_POST['submit']) : $submit ='' ;
$from = 'From: Contacts'; 
$to = 'anasse@hassala.com'; 
$subject = 'Hello';
$human = isset($_POST['human']) ? intval($_POST['human']) : '' ;
$body = "From: $name\n E-Mail: $email\n Message:\n $message";
if ($submit) {
  if ($name != '' && $valid_email) {
    if ($human == strval($_SESSION['a']+$_SESSION['b'])) {         
      if (mail ($to, $subject, $body, $from)) { 
        echo '<script>alert("Your message has been sent!");</script>';
      } else { 
        echo '<script>alert("Something went wrong, go back and try again!");</script>'; 
      } 
    } else if ($submit && $human != strval($_SESSION['a']+$_SESSION['b'])) {
      echo '<script>alert("You answered the anti-spam question incorrectly!");</script>';
    }
  } else {
    echo '<script>alert("You need to fill in all required fields!!");</script>';
  }
}
?>


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
