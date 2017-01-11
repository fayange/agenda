<?php
if(sizeof($_FILES)){
	$mimes = array(
		"image/jpeg",
		"image/png",
		"image/gif"
	);
	
	// Première clé du tableau $_FILES : nom du champ de type FILE concerné
	$tempName = $_FILES["image"]["tmp_name"]; // La clé tmp_name contient le nom "arbitraire" utilisé pour la transmission vers le serveur
	$name = $_FILES["image"]["name"]; // La clé "name" contient le nom du fichier d'origine
	echo "Fichier transmis : " . $tempName . " Nom du fichier d'origine : " . $name . "<br />\n";
	// Vérification du type MIME du fichier transmis... (image/jpeg, application/msword, application/pdf)
	$mimeType = mime_content_type($tempName); // Retourne le type MIME du fichier uploadé
	echo "Type MIME du document transféré : " . $mimeType . "<br />\n";
	// Vérifier la cohérence du type MIME par rapport à ce qu'on attend... (jpg, jpeg, png, gif)
	if($_FILES["image"]["error"] == UPLOAD_ERR_OK) { // UPLOAD_ERR_OK => Constante interne à PHP qui indique que l'upload s'est bien déroulé (= 0)
		if(in_array($mimeType,$mimes)){
			// On interdit aussi un certain nombre de caractères non autorisés
			/**
			* Interdire les espaces dans le nom du fichier
			* Interdire les caractères accentués
			* Interdire certains caractères spéciaux ("/"... qui ne sont pas vraiment aimés de tout le monde)
			* Utiliser les fonctions replace de PHP pour remplacer
			**/
			
			//Avant de procéder au déplacement lui-même, on vérifie qu'il n'y a pas déjà un fichier portant ce nom
			if(!file_exists("../../upload/" . $name)){
				move_uploaded_file($tempName, "../../upload/" . $name);
			} else {
				// image1.jpg => image1[1].jpg
				// Déterminer l'extension du document
				if(strpos($name, ".") !== false){ // strpos() retourne la position d'une chaîne de caractères dans une autre chaîne de caractère
					// On va essayer de récupérer cette extension (attention aux fichiers du genre image.05012017.jpg)
					if(function_exists("pathinfo")){
						$extension = pathinfo("../../upload/" . $name, PATHINFO_EXTENSION); // .jpg
						$filename = pathinfo("../../upload/" . $name, PATHINFO_FILENAME); // image1
						$indice = 1; // Indice me permettant de faire varier le nom du nouveau fichier
						$newfileName = $filename. "[" . $indice . "]." . $extension; // image1[1].jpg
						/**
						* En utilisant un timestamp : $newFileName = $filename . time() . "." . $extension; image178945656.jpg
						* En utilisant un uniqid() : $newFileName = $filename . uniqid() . "." . $extension;
						**/
						while(file_exists("../../upload/" . $newfileName)){
							$indice++;
							$newfileName = $filename. "[" . $indice . "]." . $extension; // image1[2].jpg
						}
						move_uploaded_file($tempName,"../../upload/" . $newfileName);
					}
				}
			}
		}
	} else {
		switch($_FILES["image"]["error"]){
			case UPLOAD_ERR_INI_SIZE: // <=> 1 : Le fichier a un poid supérieur à ce qui a été défini dans php.ini (upload_max_size)
			break;
			
			case UPLOAD_ERR_FORM_SIZE: // <=> 2 : La taille du fichier excède la taille définie dans le formulaire (MAX_FILE_SIZE)
			break;
			
			case UPLOAD_ERR_PARTIAL: // <=> 3 : Le fichier n'a été uploadé que partiellement
			break;
			
			case UPLOAD_ERR_NO_FILE: // <=> 4 : Aucun fichier n'a été téléchargé
			break;
			
			case UPLOAD_ERR_NO_TMP_DIR: // <=> 6 : Pas de dossier temporaire défini 
			break;
			
			case UPLOAD_ERR_CANT_WRITE: // <=> 7 : Echec d'écriture du fichier sur le disque
			break;
			
			case UPLOAD_ERR_EXTENSION: // <=> 8 : Une extension de PHP a empêché l'exécution de l'upload
			break;
		}
	}
}