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

"<p align=\"right\" class=\"general\">Étudiant en 2em année du cycle ingénieur à Télécom SudParis, grande école d'ingénieur française spécialisée
 dans les systèmes d'informations.<br/>
J'ai intégré l'école après 2 années de classes préparatoires aux grandes écoles MPSI/MP* au lycée Saint Louis à Paris (VI) où j'ai suivi un cursus
en spécialité informatique.<br/>
Je porte un grand intérêt pour les sciences informatiques et plus particulièrement à la sécurité des systèmes d'informations, 
un domaine qui fait de la voie d'approffondissement SSR (Sécurité des systèmes et des réseaux) de Télécom SudParis mon
premier voeu de poursuite
de mon cursus ingénieur</p>

<div class=\"trait-text\"></div><br/>

<p align=\"justify\" class=\"minet\">	Je suis également président de l'association <a href=\"https://minet.net\">MiNET</a>,
l'organisme responsable du déploiement, de la gestion et de l'entretien du réseau internet
de l'ensemble des résidences étudiantes et des locaux associatifs du campus mis à disposition par la
<a href=\"https://maisel.tem-tsp.eu/fr/\">Maisel SudParis</a>. <br/>
Enfin, je suis expert Technique à <a href=\"http://sprint-je.com/\"> Sprint junior entreprise </a> , la junior entreprise des Écoles
Télécom SudParis et Télécom École de management.
</p>";

	$subtitle = "Élève ingénieur en Technologies de l'information ";

	$projects_content = "<h2> Mes Projets </h2>
							
							<h3> Detection de visages et de profiles avec Ada Boost </h3>
								<ul>
									
									<li> Développement en C++ </li>
									<li> Utilisation de la bibiliothèque OpenCV-2.4 </li>
									<li> Utilisation de GTK 3 pour l'interface graphique </li>
								</ul>

								Git : <a href=\"http://gitlab.minet.net/marlow/projet-informatique\">projet-informatique </a>


							<h3> Déploiement d'un réseau wifi dans une résidence étudiante </h3>
								<ul>
									<li> Étude des besoins et dimensionnement du réseau </li>
									<li> Recherche documentaire et achat de matériel </li>
									<li> Configuration Wlan Controller, switch PoE et bornes Wifi </li>
									<li> Tests de stabilité </li>
								</ul>

								Rapport : <a href=\"docs/rapport-wifi.pdf\"> Wifi-U3 </a>

							<h3> Application de gestion des adhérents MiNET : ADH5 </h3>
								<ul>
									<li> Application web : Ruby on Rails</li>
									<li> Trois application rails : un frontend, un portail captif, une API Sinatra </li>
									<li> Projet collaboratif en développement continue </li>
								</ul>

 						";

 	break;

 }