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
 	$subtitle = " ";


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
 	$subtitle = "";
 	break;






 	/*-----------------------------------------FRANÇAIS------------------------------------------------------*/


 	default : 

 	/*----------------Menu de Navigation----------------*/
 	

 	$about='Présentation';
 	$projects='Projets';
 	$contacts='Contacts';
 	$cv='CV';

	/*---------------Text de présentation---------------*/

	$presentation =

"<p class=\"general\">Étudiant en 2em année du cycle ingénieur à Télécom SudParis, grande école d'ingénieur française spécialisée
 dans les systèmes d'informations.<br/>
J'ai intégré l'école après 2 années de classes préparatoires aux grandes écoles MPSI/MP* au lycée Saint Louis à Paris (VI) où j'ai suivi un cursus
en spécialité informatique.<br/>
Je porte un grand intérêt pour les sciences informatiques et plus particulièrement à la sécurité des systèmes d'informations, 
un domaine qui fait de la voie d'approffondissement SSR (Sécurité des systèmes et des réseaux) de Télécom SudParis mon
premier voeu de poursuite
de mon cursus ingénieur</p>


<p class=\"minet\">	Je suis égal<span class=\"trait-text\">ement président de l'association <a href=\"https://minet.net\">MiNET</a>,
l'organisme responsable du déploiement, de la</span> gestion et de l'entretien du réseau
de l'ensemble des résidences étudiantes et des locaux associatifs du campus mis à disposition par la
<a href=\"https://maisel.tem-tsp.eu/fr/\">Maisel SudParis</a>
</p>";

	$subtitle = "Élève ingénieur en Technologies de l'information ";
 	

 	break;

 }