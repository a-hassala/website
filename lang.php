<?php
if (isset($_GET['lang'])){
	$lang=strip_tags($_GET['lang']);

}

else{
 	$lang='fr'; // le français est la langue par défaut
 }
 
 switch($lang){ // On charges les variables de text en fonction de la langue


 	/*-----------------------------------------ESPAGNOL----------------------------------------------------*/
 	case('es'):
 	$about='Presentacion';
 	$projects='Projectos';
 	$contacts='Contactos';
 	$cv='CV';
 	break;





 	/*-----------------------------------------ANGLAIS------------------------------------------------------*/
 	case('en'):
 	$about='About Me';
 	$projects='Projects';
 	$contacts='Contacts';
 	$cv='Resume';
 	break;




 	/*-----------------------------------------FRANÇAIS------------------------------------------------------*/


 	default : 
 	$about='Présentation';
 	$projects='Projets';
 	$contacts='Contacts';
 	$cv='CV';
 	break;

 }