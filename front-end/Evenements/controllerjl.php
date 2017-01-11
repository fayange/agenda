<?php
/**
* @name controller.php : Contrôleur d'affichage d'événements d'un agenda
* @author webDev - Déc. 2016
* @package Objet/Agenda
* 	Instancie différents événements (publics ou privés) pour mise à disposition d'un agenda dans les vues
*		- vues/all.php : Tous les événements dans l'ordre chronologique inverse
*		- vue/public.php : Seulement les événements publics dans l'ordre chronologique inverse
*		- vue/dashboard.php : Tous les événements dans un tableau pour "administration"
**/

#echo "controller.php";
ini_set("display_errors", true);
error_reporting(E_ALL);



include("../../classes/Evenements/DefinitionsEvenement.class.php");
include("../../classes/Evenements/EvenementPrive.class.php");
include("../../classes/Evenements/EvenementPublic.class.php");
include("../../classes/Evenements/listingEvenements.class.php");

/**
* Cette classe va permettre de "collectionner" les événements
* De récupérer les événements collectionnés en fonction des besoins :
*	- Tous les événements dans l'ordre chronologique
*	- Les événements "publics" seulement dans l'ordre chronologique
*	- Tous les événements mais dans l'ordre alphabétique
**/


/**
* @update 1 : Récupérer tous les événements de la base de données
*(@see back-end/evenements/evenements.class.php::select()
*/

/**
* @update 2 : Boucler sur tous les événements et à chaque occurrence :
*	Créer un objet (EvenementPublic ou EvenementPrive) en fonction de la valeur de la colonne type
*	Ajouter l'objet créé à la collection des objets de l'agenda @see agenda::addEvenement()
**/
$events = new ListingEvenements;
//$events->select();

if(isset($_GET["type"])&& $_GET["type"] == "public"){	
		$events->selectPublic();	
		$titre = "Liste des évènements publics";
		$vue = "../Evenements/vues/vue-evenementspublics.php";	
		
		}
		else{
		$events->selectPrive();	
		$titre = "Liste des évènements privés";
		$vue = "../Evenements/vues/vue-evenementsprives.php";
			}


if(isset($_GET["type"])&& $_GET["type"] == "tous"){
		$events->selectDate();	
		$titre = "Liste de tous les évènements";
		$vue = "../Evenements/vues/vue-agenda2.php";
}
//var_dump($events);
if(isset($_GET["id"])){
				$titre = "Liste des évènements publics";
				$vue = "../Evenements/vues/vue-evenementspublicsID.php";
			}


/**
* @update 3 : Inspecter le contexte pour agir en conséquence :
*	- Afficher TOUS les événements triés par date
*	- N'afficher QUE les événements publics triés par date
*	- N'afficher QUE les événements privés triés par date
* Appeler les méthodes de la classe Agenda (getAllBy(), ...)
**/

/**
* Charger la vue correspondante
**/

include($vue);



