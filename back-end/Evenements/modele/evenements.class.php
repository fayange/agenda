<?php
/**
* @name evenements.class.php Services de relation entre le contrôleur et la table evenements de la base de données
* @author webdev - Déc. 2016
* @package Agenda/back-end/Evenements/modele
* @version 1.0
*	- Une méthode permettant de lister tous les événements : select()
*	- Une méthode permettant de ne récupérer que l'événement par son identifiant : selectById()
*	- Une méthode pour dispatcher la mise à jour : save()
*	- Une méthode privée pour l'insertion : add()
*	- Une méthode privée pour la mise à jour : update()
* @see Intranet/Modele/civilite.class.php
**/

require("../../classes/Database/dbConnectConfig.class.php");

class evenements {
	

	
/**
*@var private string $table : Nom de la table dans le BDD
**/
protected $table;	
	
	
/**
*@var private string $primaryKee: Nom de la colonne evenement_id  la clé primaire de la table
**/	
private $primaryKee;
	
	
/**
*@private string $type : Nom de la contient le colonne qui contient le type de la table
**/

private $type;		

	
/**
*@private string $dateDebut: Nom de la colonne qui contient la date de début de l'évènement
**/
private $ddebut;	

	/**
*@private string $dateFin: Nom de la colonne qui contient la date de fin de l'évènement
**/
private $dfin;
	
/**
*@private string $heureDebut: Nom de la colonne qui contient l'heure de début de l'évènement
**/
private $hdebut;	

	/**
*@private string $heureFin: Nom de la colonne qui contient l'heure de fin de l'évènement
**/
private $hfin;	
	
	/**
*@private string $titre: Nom de la colonne qui contient le titre de l'évènement
**/
private $titre;		

	/**
*@private string $description: Nom de la colonne qui contient la description de l'évènement
**/
private $description;			
	
	/**
*@private string $lieu: Nom de la colonne qui contient le lieu de l'évènement public
**/
private $lieu;		

		/**
*@private string $placesDispos: Nom de la colonne qui contient le nombre de places disponibles de l'évènement public
**/
private $placesdispos;
	
	
	/**
*@private string $commissions: Nom de la colonne qui contient les commissions à convoquer pour l'évènement privé
**/
private $commissions;		

		/**
*@private string $ordreDuJour: Nom de la colonne qui contient l'ordre du jour de l'évènement privé
**/
private $ordredujour;
		
	
		/**
*@private string $image: Nom de la colonne qui contient le lien de l'image de l'évènement 
**/
private $image;
			
	
/**
*@var protected int $id : clé primaire de la table dans le BDD
* destiné à stocker le nom de la clé primaire des tables
**/		
protected $id;	//
	
	
/**
*@public array $tabEvens : stocke l'ensemble des information de la table
**/	

public $tabEvens;	
	

/**
*@var protected int $itemparpage: nombre d'"item" par page de la table dans le BDD
* destiné à indiquer le nombre d'item dans la pagination 
**/		
protected $itemparpage;	
	
		
/**
*@var protected int $page: nombre de page de la table dans le BDD
* destiné à indiquer le nombre de page dans la pagination 
**/		
protected $pages;	
	
//DATE_FORMAT('%d-%m-%y')

	
/**
*@public void __construct()
* Construit un objet de type civlité et défini les propriétés privées nécessaires
**/	
public function __construct(){
	$this->table = "evenement";//Nom de la table de la BDD
	
	$this->primaryKee = "evenement_id"; // Nom la colonne evenement_id de la BDD
	$this->type = "type"; // Nom de la colonne type de la BDD
	$this->ddebut = "ddebut";//Nom de la colonne ddebut de la BDD
	$this->dfin = "dfin";//Nom de la colonne dfin de la BDD	
	$this->hdebut = "hdebut"; // Nom de la colonne hdebut de la BDD
	$this->hfin = "hfin"; // Nom de la colonne hfin de la BDD
	$this->titre = "titre"; // Nom de la colonne titre de la BDD
	$this->description = "description"; // Nom de la colonne description de la BDD
	$this->lieu = "lieu"; // Nom de la colonne lieu de la BDD
	$this->placesdispos = "placesdispos"; // Nom la colonne placesdispos  de la BDD
	$this->commissions = "commissions"; // Nom de la colonne commissions de la BDD
	$this->ordredujour = "ordredujour"; // Nom de la colonne ordre du jour de la BDD
	$this->image = "image"; // Nom de la colonne image de la BDD
	
	$this->tabEvens = array();// Initialise le tableau avec un tableau vide
	$this->tabEvenss = array();
	
}

	/**
*@public void function select(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini (set) le tableau $this->tabEvens
**/	
public function select(){
		$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos . " , " . $this->commissions . " , " . $this->ordredujour . " , " . $this->image . " FROM " . $this->table . ";";
		#echo $select;
		//instancie un objet de connexion à la BDD
		$connexion = new dbConnect();
		$base = $connexion->getBase();
		#echo "evenement";
		#var_dump($base);
	
		if(!is_null($base)){
			$resultats = $base->query($select);
			if($resultats){//verifie si la requete s'est exécutée
				//parcourir le jeu de résultats pour aliment les donnees à traiter
				$resultats->setFetchMode(PDO::FETCH_OBJ); //on réculpére les resultats
				while ($ligne = $resultats->fetch()){
					$this->tabEvens[] = array(
					"primaryKee" => $ligne->evenement_id,
					"type" => $ligne->type,
					"ddebut" => dateHelper::toFrDate($ligne->ddebut),
					"dfin" =>  dateHelper::toFrDate($ligne->dfin),
					"hdebut" => $ligne->hdebut,
					"hfin" => $ligne->hfin,
					"titre" => $ligne->titre,
					"description" => $ligne->description,
					"lieu" => $ligne->lieu,
					"placesdispos" => $ligne->placesdispos,
					"commissions" => $ligne->commissions,
					"ordredujour" => $ligne->ordredujour,
					"image" => $ligne->image
					);
					
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
		
	}	

/**
*@public void functionpagination(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini l'organisation de la pagination  
* Faire un 
* foreach($requete as $requetes):
* <div class="requete">
* <p><?php echo $requete['. $this->primaryKee .'];?> : </p>
* </div>
* <?php endforeach ?>
**/
public function pagination(){
	
	$connexion = new dbConnect();
	$base = $connexion->getBase();

	
	//USER	
$page = isset($_GET["page"])?(int)$_GET["page"]:1;	//ECHO
$itemparpage = isset($_GET["itemparpage"])&& $_GET["itemparpage"]<=50 ? (int)$_GET["itemparpage"]:10;//ECHO	

	//POSITIONNEMENT
$start = ($page > 1) ? ($page*$itemparpage) - $itemparpage:0 ;
	
	
	//QUERY
$select = "SELECT SQL_CALC_FOUND_ROWS "	. $this->primaryKee . " FROM " . $this->table . " ORDER BY " . $this->primaryKee . " DESC LIMIT {$start}, {$itemparpage} ";

$requete = $base->prepare($select);	
$requete->execute();
	
$requete = $requete->fetchAll(PDO::FETCH_ASSOC);	
#var_dump($requete);

	
//pages On aurait pu faire COUNT(*) à la place de SQL_CALC_FOUND_ROWS et FOUND_ROWS()
$select2 = "SELECT FOUND_ROWS() AS total";	
$total = $base->query($select2)->fetch()["total"];//on peut faire un ECHO la aussi pour voir le total
#var_dump($total->fetch()); // pour connaitre le nbre total de ligne dans la BDD
	return $total;
$pages = ceil($total/$itemparpage);//ceil = arrondi le nbre de page à un nbr entier - on peut faire un ECHO
	
	
}	
	
public function paginationAll(){
	
	
	//USER	
$page = isset($_GET["page"])?(int)$_GET["page"]:1;	//ECHO
$itemparpage = isset($_GET["itemparpage"])&& $_GET["itemparpage"]<=50?(int)$_GET["itemparpage"]:5;//ECHO	

	//POSITIONNEMENT
$start = ($page > 1) ? ($page * $itemparpage) - $itemparpage:0 ;
	
	
	//QUERY
$select = "SELECT SQL_CALC_FOUND_ROWS " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos . " , " . $this->commissions . " , " . $this->ordredujour . " FROM " . $this->table . " ORDER BY " . $this->primaryKee . " DESC LIMIT {$start} OFFSET {$itemparpage} ";
	
	$connexion = new dbConnect();
	$base = $connexion->getBase();

		if(!is_null($base)){
			$resultats = $base->query($select);
			if($resultats){//verifie si la requete s'est exécutée
				//parcourir le jeu de résultats pour aliment les donnees à traiter
				$resultats->setFetchMode(PDO::FETCH_OBJ); //on réculpére les resultats
				while ($ligne = $resultats->fetch()){
					$this->tabEvenss[] = array(
					"primaryKee" => $ligne->evenement_id,
					"type" => $ligne->type,
					"ddebut" => $ligne->ddebut,
					"dfin" => $ligne->dfin,
					"hdebut" => $ligne->hdebut,
					"hfin" => $ligne->hfin,
					"titre" => $ligne->titre,
					"description" => $ligne->description,
					"lieu" => $ligne->lieu,
					"placesdispos" => $ligne->placesdispos,
					"commissions" => $ligne->commissions,
					"ordredujour" => $ligne->ordredujour
					
					);
					return $this;
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
	return array();
#var_dump($resultats);	
//pages On aurait pu faire COUNT(*) à la place de SQL_CALC_FOUND_ROWS et FOUND_ROWS()
$select2 = "SELECT FOUND_ROWS() AS total";	
$total = $base->query($select2)->fetch()["total"];//on peut faire un ECHO la aussi pour voir le total
#var_dump($total->fetch()); // pour connaitre le nbre total de ligne dans la BDD
return $this;
$pages = ceil($total/$itemparpage);
	return $pages;//ceil = arrondi le nbre de page à un nbr entier - on peut faire un ECHO
	
	
}		
	
public function paginationPages(){
	
	$select2 = "SELECT FOUND_ROWS() AS total";	
	
	$connexion = new dbConnect();
	$base = $connexion->getBase();

		if(!is_null($base)){
$total = $base->query($select2)->fetch()["total"];//on peut faire un ECHO la aussi pour voir le total
#var_dump($total->fetch()); // pour connaitre le nbre total de ligne dans la BDD
	return $total;
$pages = ceil($total/$itemparpage);//ceil = arrondi le nbre de page à un nbr entier - on peut faire un ECHO
		}
}		
/**
*@public array selectById(int $Id)
* @param int $id : Identifiant de l'évènement courante
* @return array tableau associatif avec l'ID l'évènement et les autres élèments 
**/	
public function selectById($id){
	
	$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut . " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos . " , " . $this->commissions . " , " . $this->ordredujour . " , " . $this->image .  " FROM " . $this->table;
	//Ajouter la contrainte sur la evenement _id
	$select .=" WHERE " . $this->primaryKee . " = " . $id . ";";
	
		//instancie un objet de connexion à la BDD
		$connexion = new dbConnect();
		$base = $connexion->getBase();
		#echo "Evenement";
		#var_dump($base);
	
		if(!is_null($base)){
			$resultats = $base->query($select);
			if($resultats){//verifie si la requete s'est exécutée
				//parcourir le jeu de résultats pour aliment les donnees à traiter
				$resultats->setFetchMode(PDO::FETCH_OBJ); //on réculpére les resultats
				$ligne = $resultats->fetch(); //1 seule ligne pour l'identifiant
				$laligne = array(
					"clePrimaire" => $ligne->evenement_id,
					"type" => $ligne->type,
					"ddebut" => dateHelper::toFrDateJour($ligne->ddebut),
					"dfin" =>  dateHelper::toFrDateJour($ligne->dfin),
					"hdebut" => $ligne->hdebut,
					"hfin" => $ligne->hfin,
					"titre" => $ligne->titre,
					"description" => $ligne->description,
					"lieu" => $ligne->lieu,
					"placesdispos" => $ligne->placesdispos,
					"commissions" => $ligne->commissions,
					"ordredujour" => $ligne->ordredujour,
					"image"=> $ligne->image			
				);
				return $laligne;
				#echo $laligne;
				#die();
			
			}
			
		} else{
			echo "impossible de se connecter à la base ";
		}
	
	return array();
	
}	
	
	
/**
*@public bool function save(array $donnéesPostees)
* @param array $donneesPostees => copie du tableau interne $_POST
* @return boolean vrai si l'opération s'est bien déroulées, faux sinon
**/		
public function save($donneesPostees){//via le controller $_POST ligne 19
	//avant toute chose vérifier s'il n'existe pas une ligne dans la table avec cet évènement
//	!$this->exists($donneesPostees["type"]) && 

//$evenement_id = isset($_POST["key"])?$_POST["key"] : "";	
	
	if(!$this->exists($donneesPostees["type"], $donneesPostees["ddebut"], $donneesPostees["dfin"], $donneesPostees["hdebut"], $donneesPostees["hfin"], $donneesPostees["titre"], $donneesPostees["description"], $donneesPostees["lieu"], $donneesPostees["placesdispos"], $donneesPostees["commissions"], $donneesPostees["ordredujour"])){

		$connexion = new dbConnect();
		$base = $connexion->getBase();
		
		if($donneesPostees["clePrimaire"] == ""){
			//insertion 
 			$requete = "INSERT INTO " . $this->table . "(" . $this->type . ", " . $this->ddebut . ", " . $this->dfin . ", " . $this->hdebut . ", " . $this->hfin . ", " . $this->titre . ", " . $this->description . ", " . $this->lieu . ", " . $this->placesdispos . ", " . $this->commissions . ", " . $this->ordredujour . " , " . $this->image . ") VALUES ('" . $donneesPostees["type"] . "', '" . dateHelper::toUsDate($donneesPostees["ddebut"], "d-m-Y") . "', '" . $donneesPostees["dfin"] . "', '" . dateHelper::toUsDate($donneesPostees["dfin"], "d-m-Y") . "', '" . $donneesPostees["hfin"] . "', " . $base->quote($donneesPostees["titre"]) . ", " . $base->quote($donneesPostees["description"]) . ", " . $base->quote($donneesPostees["lieu"]) . ", '" . $donneesPostees["placesdispos"] . "', " . $base->quote($donneesPostees["commissions"]) . ", " . $base->quote($donneesPostees["ordredujour"]) . ");";

			
		} else{
			//mise à jour
			$requete = "UPDATE " . $this->table . " SET " . $this->type . " = '" . $donneesPostees["type"] . "', ";
			$requete .=  $this->ddebut . " = '" . dateHelper::toUsDate($donneesPostees["ddebut"], "d-m-Y") . "', ";
			$requete .=  $this->dfin . " = '" . dateHelper::toUsDate($donneesPostees["dfin"], "d-m-Y") . "', ";
			$requete .=  $this->hdebut . " = '" . $donneesPostees["hdebut"] . "', ";
			$requete .=  $this->hfin . " = '" . $donneesPostees["hfin"] . "', ";
			$requete .=  $this->titre . " = " . $base->quote($donneesPostees["titre"]) . ", ";
			$requete .=  $this->description . " = " . $base->quote($donneesPostees["description"]) . ", ";
			$requete .=  $this->lieu . " = " . $base->quote($donneesPostees["lieu"]) . ", ";
			$requete .=  $this->placesdispos . " = '" . $donneesPostees["placesdispos"] . "', ";
			$requete .=  $this->commissions . " = " . $base->quote($donneesPostees["commissions"]) . ", ";
			$requete .=  $this->ordredujour . " = " . $base->quote($donneesPostees["ordredujour"]) . "";
			$requete .= " WHERE " . $this->primaryKee . " = '" . $donneesPostees["clePrimaire"] . "';";

		
		
		#$base->quote = méthode QUOTE() pour échapper les caractères tel que apostrophe ou autre dans les textes
//		Pas besoin de cette méthote si les requete sont prepare
		
		
	#var_dump($donneesPostees["ddebut"]);
		// reste à exécuter la requête elle-même*	
	
		if(!is_null($base)){
			$resultats = $base->exec($requete);
			if($resultats !== false){
				return true;
							
			}
		}
	
	}	
	return false; // retourne faux dans tous les autres cas
}
}
	
//   $req="SELECT date_format(inscription, '%d-%m-%Y') AS inscription FROM membres WHERE pseudo='$pseudo'";
//        $res=mysql_query($req);
//        $data=mysql_fetch_assoc($res);
//        echo $data['inscription'];
	
/**
*@public bool function save(array $donnéesPostees)
* @param array $donneesPostees => copie du tableau interne $_POST
* @return boolean vrai si l'opération s'est bien déroulées, faux sinon
**/	
private function exists($type, $ddebut, $dfin, $hdebut, $hfin, $titre, $description, $lieu, $placesdispos, $commissions, $ordredujour){
	
	$connexion = new dbConnect();
	$base = $connexion->getBase();
	
	$select = "SELECT COUNT(*) AS nb FROM " . $this->table ; 
	$select .= " WHERE " . $this->type . "='" . $type . "'";	
	$select .= " AND " . $this->ddebut . "='" . $ddebut . "'";	
	$select .= " AND " . $this->dfin . "='" . $dfin . "'";
	$select .= " AND " . $this->hdebut . "='" . $hdebut . "'";
	$select .= " AND " . $this->hfin . "='" . $hfin . "'";
	$select .= " AND " . $this->titre . "=" . $base->quote($titre) . "";
	$select .= " AND " . $this->description . " = " . $base->quote($description) . "";
	$select .= " AND " . $this->lieu . "=" . $base->quote($lieu) . "";
	$select .= " AND " . $this->placesdispos . "='" . $placesdispos . "'";
	$select .= " AND " . $this->commissions . "=" . $base->quote($commissions) . "";
	$select .= " AND " . $this->ordredujour . "=" . $base->quote($ordredujour) . ";";
	
		
			#var_dump($base);
	
		if(!is_null($base)){
			$resultats = $base->query($select);
			if($resultats){//verifie si la requete s'est exécutée
				//parcourir le jeu de résultats pour aliment les donnees à traiter
				$resultats->setFetchMode(PDO::FETCH_OBJ); //on réculpére les resultats
				$ligne = $resultats->fetch(); //1 seule ligne pour le count As
				//vérifier la valeur de l'attibut "nb" retourné dans $ligne
//					return $ligne->nb;
					if($ligne->nb == 0){
						return false;
					}				
			}
			
		}
			//pas de connexion à la base, soit ma requête a échouée ou il existe déjà une ligne avec ce libellé dans la base
//		echo "impossible de se connecter à la base ";
		return true; // considérons que ça existe déjà 

}	

public function delete($clePrimaire){
							
				$delete = "DELETE FROM " . $this->table ;
				$delete .=" WHERE " . $this->primaryKee . " = '" . $clePrimaire . "';";
	
				//instancie un objet de connexion à la BDD
					$connexion = new dbConnect();
					$base = $connexion->getBase();
					#var_dump($base);

						if(!is_null($base)){
								$resultats = $base->exec($delete);
								if($resultats !== false){
									return true;
								}
						}
							
		return false; // retourne faux dans tous les autres cas
}


	
	
	
	
	
	
public function pages($pages=null){
		if(!is_null($pages)){
			$this->pages= $pages;
			return $this;
		}
		return $this->pages;
	}	
		
public function table($tables=null){
		if(!is_null($tables)){
			$this->table= $tables;
			return $this;
		}
		return $this->table;
	}
public function primaryKee($id=null){
		if(!is_null($id)){
			$this->primaryKee= $id;
			return $this;
		}
		return $this->primaryKee;
	}
	
	
	
	
	
	
	
	
	
	
}
