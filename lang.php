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
 	
 	/*----------------Menu de Navigation----------------*/
 	
 	$about='Presentacion';
 	$projects='Projectos';
 	$contacts='Contactos';
 	$cv='CV';

 	/*---------------Text de présentation---------------*/

 	$presentation = " ";


 	break;





 	/*-----------------------------------------ANGLAIS------------------------------------------------------*/
 	case('en'):

 	/*----------------Menu de Navigation----------------*/

 	$about='About Me';
 	$projects='Projects';
 	$contacts='Contacts';
 	$cv='Resume';


 	/*---------------Text de présentation---------------*/

 	$presentation="";
 	break;






 	/*-----------------------------------------FRANÇAIS------------------------------------------------------*/


 	default : 

 	/*----------------Menu de Navigation----------------*/
 	

 	$about='Présentation';
 	$projects='Projets';
 	$contacts='Contacts';
 	$cv='CV';

	/*---------------Text de présentation---------------*/

	$presentation=

"<p class=\"general\">Étudiant en 2em année du cycle ingénieur à Télécom SudParis, grande école d'ingénieur française spécialisée dans les systèmes d'informations,
après 2 années de classes préparatoires aux grandes écoles MPSI/MP* au lycée Saint Louis à Paris (VI).	Je porte un grand intérêt pour les sciences informatiques et plus particulièrement à la sécurité des systèmes d'informations, 
un domaine qui fait de la voie d'approffondissement SSR (Sécurité des systèmes et des réseaux) de Télécom SudParis mon premier voeu de poursuite
de mon cursus ingénieur </p>


<p class=\"minet\">	Je suis également président de l'association <a href=\"www.minet.net\">MiNET</a>, l'organisme responsable du déploiement, de la gestion et de l'entretien du réseau
de l'ensemble des résidences étudiantes et des locaux associatifs du campus mis à disposition par la <a href=\"www.maisel.tem-tsp.eu/fr/\">Maisel SudParis</a>
</p>";
 	break;

 }