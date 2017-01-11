<?php
/**
* @name controller.php => Contrôleur du back-end CRUD sur la table evenements
* @author webdev - Déc. 2016
* @package Agenda/back-end/Evenements
* @version 1.0
* @see Intranet/Civilite/civiliteController.php
**/
/**
 * Charger le "loader" de l'application
 */
require_once(dirname(__FILES__) . " ../../appLoader.php")

#echo "controller.php";
ini_set("display_errors", true);
error_reporting(E_ALL);

/**
* 1. Importer les classes nécessaires pour le fonctionnement du contrôleur
**/
if(file_exists("../Evenements/modele/helper/dateHelper.class.php"))
	require("../Evenements/modele/helper/dateHelper.class.php");
else 
	echo "le fichier n'existe pas" . $_SERVER['PHP_SELF'];


if(file_exists("../Evenements/modele/evenements.class.php"))
	require("../Evenements/modele/evenements.class.php");
else
	echo "le fichier2 n'existe pas" . $_SERVER['PHP_SELF'];


//echo dateHelper::toFrDate("2016-12-03", "d-m-Y", true);
//
//echo dateHelper::toUsDate("03.12.2016");	  
	  
/**
* Instancier un nouvel objet ORM
**/
$events = new evenements();


/**
* Peut être que le tableau interne $_POST a été défini
*	Ce sera le cas lorsque l'utilisateur aura cliqué sur un bouton submit du formulaire
**/
/**
* 2. Savoir si des données ont été postées et agir en conséquence : Ajouter ou Modifier l'information
**/
if(sizeof($_FILES)){
	$mimes = array(
		"image/jpeg",
		"image/jpg",
		"image/png",
		"image/gif"
	
	);
}
/**
* On va controler si des fichiers ont été transmise
**/
if(sizeof($_FILES)){
	#var_dump($_FILES);
	#die();
	//première clé du tableau $_FILES : nom du champ de type File concerné
	$tempName = $_FILES["image"]["tmp_name"];// la clé tmp_name contient le "arbitraire" utilisé pour la transmission vers le serveur
	$name = $_FILES["image"]["name"];//la clé name contient le nom du fichier d'origine
	echo "Fichier transmis : " . $tempName . " Nom du fichier d'origine : " . $name . "<br>\n";
	$mimeType = mime_content_type($tempName); // Retourne le type MIME du fichier uploadé
	echo "Type mime du document : " . $mimeType . "<br>\n";
	
	// vérifie la cohérence du type MIME par rappport à ce que l'on attends (jpg, png, ect... )
	if($_FILES["image"]["error"] == UPLOAD_ERR_OK){//UPLOAD_ERR_OK => constante interne PHP qui indique que l'upload s'est bien déroulé (=0)	
		if(in_array($mimeType, $mimes)){
			// avant de procéder au déplacement lui-même, on vérifie qu'il n'y a pas déjà un fichier portant ce nom 
			if(!file_exists("../Evenements/assets/upload/" . $name)){
				move_uploaded_file($tempName, "../Evenements/assets/upload/" . $name);
			} else{
				//déterminer l'extension du document
				if(strpos($name, ".") !== false){//strpos retourne la postion d'une chaine de caractères dans une autre chaine de caractère
					// on va essayer de récupérer cette extension  (attention aux fichiers du genre image.083669696.jpg)
					if(function_exists("pathinfo")){ 
						$extension = pathinfo(("../Evenements/assets/upload/" . $name), PATHINFO_EXTENSION);//extension du fichier
						$fileName = pathinfo(("../Evenements/assets/upload/" . $name), PATHINFO_FILENAME);// nom du fichier sans l'extension
						$indice = 1; //indice me permettant de faire varier le nom du nouveau fichier
						$newfileName = $fileName. "[" . $indice ."]" . $extension; // image1[1].jpg
							while(file_exists("../Evenements/assets/upload/" . $newfileName)){
								$indice++;
								$newfileName = $fileName. "[" . $indice ."]" . $extension;// image1[2].jpg
							}
								move_uploaded_file($tempName, "../Evenements/assets/upload/" . $newfileName);
					}
				}
			}
		}
	} else{
		switch($_FILES["image"]["error"]){
			case UPLOAD_ERR_INI_SIZE; // <=>1: Le fichier a un poids supérieur a ce qui a été définie dans php.ini	
			break;
			
			case UPLOAD_ERR_FORM_SIZE; // <=>2: La taille du fichier a un poids supérieur a ce qui a été définie dans le formualaire(MAX_FILE_SIZE)	
			break;
				
			case UPLOAD_ERR_PARTIAL; // <=>3: Seule une partie du fichier a été transféré
			break;
				
			case UPLOAD_ERR_NO_FILE; // <=>4: Pas de fichiers, ou aucun fichier téléchargé
			break;
			
			case UPLOAD_ERR_NO_TMP_DIR; // <=>6: Pas de dossiers temporaires définis
			break;
				
			case UPLOAD_ERR_CANT_WRITE; // <=>7: Echec d'écriture du fichier sur le disque
			break;
				
			case UPLOAD_ERR_EXTENSION; // <=>8: Une extension de PHP a empêché l'exécution de l'upload
			break;	
		}
	}
} 





if(sizeof($_POST) > 0){
	// Le tableau $_POST n'est pas vide si le bouton "submit" d'un formulaire a été utilisé

	$events->save($_POST);
} 
#var_dump($_POST);

/**
* Détermine le contexte d'exécution
**/


/**
* 3. Inspecter les données de la requête HTTP ($_GET) pour savoir ce que vous avez à faire :
*	- Afficher la liste des événements de votre base de données
*	- ou Supprimer un événement dont vous connaîtrez l'id
*	- Afficher le formulaire d'ajout d'un événement
*	- Afficher le formulaire de mise à jour d'un événement
**/

//if(isset($_GET["context"]) && $_GET["context"] == "delete"){
//	echo "J'ai demandé au contrôleur de supprimer un événement<br />";
//	if(!isset($_GET["id"])){
//		echo "Mais j'ai oublié de dire quel identifiant supprimer !<br />";
//	} else {
//		echo "Et l'événement à supprimer est : " . $_GET["id"] . "<br />";
//	}
//}

	  
	  //	 Astuce : le stockage des dates dans une table se fait sous la forme YYYY-MM-DD
//Récupération dans $_POST["date_debut"] => 26-12-2016 / Convertir pour passer au format US
//
//$dateParts = explode("-",$dateFr);
//$usDate = $dateParts[2] . "-" .$dateParts[1] . "-" . $dateParts[0];
//	
//$date = DateTime::createFromFormat($format, '2009-02-15');	
  

if(!isset($_GET["id"])){
	if(!isset($_GET["action"])){
		//on va vérifier que le contexte est in "delete"
		if(isset($_GET["context"])&& $_GET["context"] == "delete"){
			#echo $_GET["clePrimaire"];			
			$events->delete($_GET["clePrimaire"]);//VERSION 1
		}
		
		// Pas de paramètre "id" dans l'url, et pas "action" non plus, a priori, on doit lister tous les evenements
		$events->select();
			

		
		$titre = "Liste des évènements";
		$vue = "../Evenements/vues/dist/index.php";

//	$vue = "/../vue/index.php";
	#var_dump($_GET)	
		
	} else {
		// L'URL transmise est evenementController.php?action=ajouter
		$titre = "Ajouter un évènement";
		$vue = "../Evenements/vues/dist/item-editor.php";
		$buttonLabel = "Ajouter";
		$buttonName = "Ajouter";
		//initialise le tableau $lEvenementChoisi
		$lEvenementChoisi = array(
		"clePrimaire" => "",//pas le même tableau mais même construction que selectById
		"type" => "",
		"ddebut" => "",
		"dfin" => "",
		"hdebut" => "",
		"hfin" => "",
		"titre" => "",
		"description" => "",
		"lieu" => "",
		"placesdispos" => "",
		"commissions" => "",
		"ordredujour" => "",
		"image" => ""		
		
		);
		
		   }
	
} else {
	
		// Un identifiant transmis dans l'url, ne récupérer que l'évènement correspondand
		$titre = "Mettre à jour un évènement";
		$vue = "../Evenements/vues/dist/item-editor.php";
		$buttonLabel = "Mettre à jour";
		$buttonName = "Mettre à jour";
		$lEvenementChoisi = $events->selectById($_GET["id"]);
		
	}
	




if(isset($_GET["type"])&& $_GET["type"] == "tous"){
			
		$titre = "Liste des évènements";
		$vue = "../Evenements/vues/dist/items-list.php";
		
	} 


if(isset($_GET["type"])&& $_GET["type"] == "table"){
			
		$titre = "Liste des évènements";
		$vue = "../Evenements/vues/dist/items-bootstrap.php";

		
	} 

//$events->pagination();



/**
* 3. Inspecter les données de la requête HTTP ($_GET) pour savoir ce que vous avez à faire :
*	- Afficher la liste des événements de votre base de données
*	- ou Supprimer un événement dont vous connaîtrez l'id
*	- Afficher le formulaire d'ajout d'un événement
*	- Afficher le formulaire de mise à jour d'un événement
**/
#var_dump($_GET);

//if(isset($_GET["context"]) && $_GET["context"] == "delete"){
//	echo "J'ai demandé au contrôleur de supprimer un événement<br />";
//	if(!isset($_GET["id"])){
//		echo "Mais j'ai oublié de dire quel identifiant supprimer !<br />";
//	} else {
//		echo "Et l'événement à supprimer est : " . $_GET["id"] . "<br />";
//	}
//}
	  


/**
* 4. Charger la vue correspondante à ce qui a été défini à l'étape 3
**/
include($vue);	  
	  
	  
