<?php
/**
 * @name appLoader.php => chargement des classes 
 * @author Stéphanie CAUMONT - JANV 2017
 * @package Agenda/
 * @version 1.0
 **/


class appLoader{


 private static $racine;


	
	public function __construct(){
		#echo "Script en cours d'exécution : " .$_SERVER["PHP_SELF"] . "<br>\n";

		//Fonction qui définit l'autoloader de classes
		spl_autoload_register(array(__CLASS__, "autoload"));

	}

/**
* Méthode statique (ou fonction) qui sera applée automatiquement
* lors de l'instaciation d'un classe
* @param string $className Nom de la classe à charger
* Les classes peuvent être dans
* 	- le dossier modèle du controleur courant
* 	- le dossier classes
*/
public static function autoload($className){
        self::$racine = $_SERVER["DOCUMENT_ROOT"];
        #echo "Dossier racine : " . $_SERVER["DOCUMENT_ROOT"] . "<br>\n";

		#begin debug
		#echo "on charge la classe " . $className . "<br>\n";
		#end debug

      //1. On cherche d'abord dans le dossier Classes de l'application
		$cheminCompletClasse = self::searchClass(self::$racine . "/classes/",$className);

		if(!$cheminCompletClasse){
			$cheminCompletClasse = self::searchClass(self::$racine . "/",$className);
		}

		if($cheminCompletClasse){
			require_once($cheminCompletClasse);
			return true;
		}

		throw new Exception("Impossible de trouver la classe " . $className, -100001);
		return false;


	}

    private static function searchClass($dossier, $className){
        $listeFichiers = new \DirectoryIterator($dossier);

        foreach ($listeFichiers as $element){
         // ne pas traiter les dossiers (. et ..)
            if($element->isDot()){
                #echo "Dans le dossier :" .$dossier . " On a un dossier \".\" ou \"..\"<br>\n";
                continue;
            }

            if($element->isDir()){//l'objet $fichier de DirectoryIterator est un dossier
                 #echo "L élément est un  le dossier, il s'appelle : " . $element->getFileName() . "<br>\n";
                  switch($element->getFileName()){
                     case "assets";
                     case "css";
                     case "Docs";
                     case "fonts";
                     case "css";
                     case "javascript";
                     case "js";
                     case "libs";
                     case "git";
                     continue;
                     break;

                     default:
                        #echo "C'est un dossier, on rappelle la méthode searchClass avec les paramètres : " . $dossier . $element->getFileName() .  " , " . $className . "<br>\n";

                     	if($resultat = self::searchClass($dossier . $element->getFilename() . "/", $className)) {                 // On a donc trouvé dans ce nouveau dossier ce qu'on cherche...
					       return $resultat; // On sort de la boucle itérative avec le chemin complet à charger
                        } else {
                            continue; // On passe à l'élément suivant
                            }

                    break;
                  }

			     } else {
                    // Il s'agit donc d'un fichier...
                    if($element->getFileName() == $className . ".class.php"
                            || $element->getFileName() == $className . ".php"
                            || $element->getFileName() == "class." . $className . ".php"){

                                #echo "C'est le fichier que l'on cherche, ". $className . " on le retourne ...<br>\n";
                                // Et il s'agit bien de celui qu'on recherche
                                return $dossier . $element->getFilename();
                                }
                    }
            }
         return false; // Le fichier demandé n'a pas pu être trouvé...
        }






}







	
