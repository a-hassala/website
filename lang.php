<?php

if (isset($_GET['lang'])){
	$_SESSION['lang']=strip_tags($_GET['lang']);

}

else if (!isset($_SESSION['lang'])) {
 	$_SESSION['lang']='fr'; // le français est la langue par défaut
 }
 
 //echo 'la variable de session vaut ' . $_SESSION['lang'] ;

 $lang=$_SESSION['lang'];

 switch($lang){ // On charges les variables de text en fonction de la langue


 	/*-----------------------------------------ESPAGNOL----------------------------------------------------*/
 	case('es'):
 	
 	/*----------------Menu de Navigation----------------*/
 	
 	$about='Presentacion';
 	$projects='Projectos';
 	$contacts='Contactos';
 	$cv='CV';
 	$toggle = 'Alternar el Menú';

 	/*---------------Text de présentation---------------*/

 	$presentation = " ";
 	$subtitle = " ";

	/*-------------Projets---------------------------*/

 	$projects_content = '';


 	break;





 	/*-----------------------------------------ANGLAIS------------------------------------------------------*/
 	case('en'):

 	/*----------------Menu de Navigation----------------*/

 	$about='About Me';
 	$projects='Projects';
 	$contacts='Contacts';
 	$cv='Resume';
 	$toggle = 'Toggle Menu';


 	/*---------------Text de présentation---------------*/

 	$presentation="<p align=\"right\" class=\"general\">Second year student at the French
 	IT top graduate engineering school Telecom SudParis.<br/>
 	I entered the school after 2 years of preparatory course for engineering school in MP*
 	section at lycée Saint Louis in Paris (VI) - amid top 10
 	French schools - majoring in Maths and Computer Science.<br/>
 	My interest is focused on computer science and particularly on Information Systems Security,
 	thats's why the specialised course SSR (Sécurité des systèmes et des réseaux) in Télécom SudParis is
 	my target class for my engineering curriculum</p>

 	<div class=\"trait-text\"></div><br/>

 	<p align=\"justify\" class=\"minet\">	<span class=\"premiere-ligne\">I</span> am also the président of
 	<a href=\"https://minet.net\">MiNET</a> Association, ISP of Telecom SudParis student apartments directed by the
 	<a href=\"https://maisel.tem-tsp.eu/fr/\">Maisel SudParis</a>. <br/>
 	Finally, I am one of the technical experts in <a href=\"http://sprint-je.com/\"> Sprint junior entreprise </a> 
 	where I handle technical aspects of our business proposals.
 	</p>";


 	$subtitle = "Msc IT Engineering Student ";

	/*-------------Projets---------------------------*/
	$my = 'My';

 	$project = 'Projects';
 	$projects_content = "
 	<p>
 	My public projects are available here  : 
 	<a id='bitbucket' href=\"http://bitbucket.org/a_hassala/\" target=\"_blank\">
 		<img src='Images/bitbucket.png' alt='Bitbucket'>
 	</a>
 	

 	<h3> Refactoring a captive portal source code : </h3>
 	<ul>
 		<li> Web Application : PHP-5.5</li>
 		<li> MVC Design Pattern  </li>
 		<li> Continuous software development team project </li>
 		<li> Capistrano deployment</li>
 	</ul>
 	Git repo : <a href=\"http://gitlab.minet.net/marlow/portail\ target=\"_blank\">
 					<img height=50em src='Images/bitbucket.png' alt='Bitbucket'>
 				</a>	
 	

 	<h3> wifi network deployment </h3>
 	<ul>
 		<li> Needs analysis </li>
 		<li> Network planning and design </li> 
 		<li> Documentaire and hardware solution election</li>
 		<li> Wlan Controller, PoE  switches and Wifi access points configuration</li>
 		<li> Crash tests and benchmarking </li>
 	</ul>

 	Report : <a href=\"docs/rapport-wifi.pdf\"> Wifi-U3 </a>

 	<h3> ISP backend application : ADH5 </h3>
 	<ul>
 		<li> Web Apllication : Ruby on Rails</li>
 		<li> Three Rails Applications : a frontend, captive portail and a Sinatra API </li>
 		<li> Continuous software development team project </li>
 	</ul>

 	<h3> Faces and profiles detection using Ada Boost </h3>
 	<ul>

 		<li> C++ software development </li>
 		<li> OpenCV-2.4 Library</li>
 		<li> GTK-3 GUI</li>
 	</ul>

 	Git repo : <a href=\"http://gitlab.minet.net/marlow/projet-informatique\" target=\"_blank\">
 					<img height=50em src='Images/gitlab.png' alt='Gitlab'>
 				</a>
 	</p>


 	
 	";



 	break;

 	/*-----------------------------------------FRANÇAIS------------------------------------------------------*/


 	default : 

 	/*----------------Menu de Navigation----------------*/
 	

 	$about='Présentation';
 	$projects='Projets';
 	$contacts='Contacts';
 	$cv='CV';
 	$toggle = 'Basculer le Menue';

 	/*---------------Text de présentation---------------*/

 	$presentation =

 	"<p align=\"right\" class=\"general\">Étudiant en 2em année du cycle ingénieur à Télécom SudParis,
 	grande école d'ingénieur française spécialisée dans les systèmes d'informations.<br/>
 	J'ai intégré l'école après 2 années de classes préparatoires aux grandes écoles MPSI/MP* au lycée
 	Saint Louis à Paris (VI) où j'ai suivi un cursus en spécialité informatique.<br/> 
 	Je porte un grand intérêt pour les sciences informatiques et plus particulièrement à la sécurité
 	des systèmes d'informations, un domaine qui fait de la voie d'approffondissement SSR
 	(Sécurité des systèmes et des réseaux) de Télécom SudParis mon premier voeu de poursuite
 	de mon cursus ingénieur</p>

 	<div class=\"trait-text\"></div><br/>

 	<p align=\"justify\" class=\"minet\">	<span class=\"premiere-ligne\">Je</span> suis également
 		président de l'association <a href=\"https://minet.net\">MiNET</a>, l'organisme responsable
 		du déploiement, de la gestion et de l'entretien du réseau internet
 		de l'ensemble des résidences étudiantes et des locaux associatifs du campus mis à disposition par la
 		<a href=\"https://maisel.tem-tsp.eu/fr/\">Maisel SudParis</a>. <br/>
 		Enfin, je suis expert Technique à <a href=\"http://sprint-je.com/\"> Sprint junior entreprise </a>, 
 		la junior entreprise des Écoles Télécom SudParis et Télécom École de management.
 	</p>";

 	$subtitle = "Élève ingénieur en Technologies de l'information ";



 	/*-------------Projets---------------------------*/

 	$my = 'Mes';

 	$project = 'Projets';

 	$projects_content = "
 	<p>
 	Vous pouvez consulter mes projets publiques ici : 
 	<a id='bitbucket' href=\"http://bitbucket.org/a_hassala/\" target=\"_blank\">
 		<img src='Images/bitbucket.png' alt='Bitbucket'>
 	</a>
 	

 	<h3> Refonte d'un portail captif : </h3>
 	<ul>
 		<li> Application web : PHP-5.5</li>
 		<li> Site entièrement refait en suivant un design pattern MVC  </li>
 		<li> Projet collaboratif en développement continue </li>
 		<li> Deploiement Capistrano</li>
 	</ul>
 	Dépôt git : <a href=\"http://gitlab.minet.net/marlow/portail\ target=\"_blank\">
 					<img height=50em src='Images/bitbucket.png' alt='Bitbucket'>
 				</a>	
 	

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

 	<h3> Detection de visages et de profiles avec Ada Boost </h3>
 	<ul>

 		<li> Développement en C++ </li>
 		<li> Utilisation de la bibiliothèque OpenCV-2.4 </li>
 		<li> Interface graphique GTK-3</li>
 	</ul>

 	Dépôt git : <a href=\"http://gitlab.minet.net/marlow/projet-informatique\" target=\"_blank\">
 					<img height=50em src='Images/gitlab.png' alt='Gitlab'>
 				</a>
 	</p>


 	
 	";

 	break;

 }