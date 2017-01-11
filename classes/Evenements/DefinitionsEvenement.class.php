<?php
/**
 * @name  DefinitionEvenement.class.php 
 * @package /Objet/Initiation/agenda/classes
 * @version 1.0
 * @author Stéphanie CAUMONT - 2016 - 2017
**/



class DefinitionsEvenement{
	
/**
* public var
* @var int $dateDebut : Date de début de l'évènement
**/	
protected $ddebut;
	
/**
* public var
*  @var int $dateFin : Date de début de l'évènement
**/		
protected $dfin;
	
/**
* public var
*  @var int $heureDebut : heure de début de l'évènement
**/		
protected $hdebut;
	
/**
* public var
* @var int $heureFin : heure de fin de l'évènement
**/		
protected $hfin;
	
/**
* protected var
* @var string $titre: Nom de l'évènement
**/		
protected $titre;
	
/**
* protected var
* @var string $description : ADescription de l'évènement
**/
protected $description;


	
/**
* @var private array $champs : Stocker les objets des champs créés dans la contrôleur
**/	
private $primaryKee;

	
		
/**
* @var private array $champs : Stocker les objets des champs créés dans la contrôleur
**/	
private $type;
/**
* Contient la valeur associée à la vue à charger dans la méthode render()
**/
protected $vue;
	
/**
*private var
* @var string $lieu : Lieu de la réunion
**/			
private $lieu;	
	
/**
*private var
* @var int $placeDispos : Nombre de places pour la réunion 
**/		
private $placesdispos;
	
/**
*private var
* @var int $commissions :commissions à convoquées
**/		
private $commissions;	
	

	
/**
*private var
* @var string $OrdreDuJour : ordre du jour de la réunion
**/		
private $ordredujour;		
	
	
/**
*@var private string $table : Nom de la table dans le BDD
**/
protected $table;		
	
	/**
	* Constructeur de la classe, appelé automatiquement lors de l'instanciation
	**/
//	public function __construct(){
//	$this->ddebut="1";
//	$this->dfin="31";
//	$this->hdebut="8";
//	$this->hfin="18";
//	$this->titre="Evenement";
//	$this->description="In expetendis quo pariatur sed mandaremus in legam, voluptate ipsum tamen idesse eu quis consequat arbitror";
//	}
	
public function id($id=null){
		if(!is_null($id)){
			$this->id = $id;
			return $this;
		}
		return $this->id;
	}
	
public function ordre($ordre=null){
		if(is_null($ordre)){
			return is_null($this->ordre) ? 1 : $this->ordre;
		}
		$this->ordre = $ordre;
		return $this;
	}
	
	
	public function ddebut($dateDebut=null){
		if(!is_null($dateDebut)){
			$this->ddebut = $dateDebut;
			return $this;
		}
		return $this->ddebut;
	}
	
	
	public function dfin($dateFin=null){
		if(!is_null($dateFin)){
			$this->dfin = $dateFin;
			return $this;
		}
		return $this->dfin;
	}
	
	
	
	public function hdebut($heureDebut=null){
		if(!is_null($heureDebut)){
			$this->hdebut = $heureDebut;
			return $this;
		}
		return $this->hdebut;
	}
	
	
	public function hfin($heureFin=null){
		if(!is_null($heureFin)){
			$this->hfin = $heureFin;
			return $this;
		}
		return $this->hfin;
	}
	
	
	public function titre($titre=null){
		if(!is_null($titre)){
			$this->titre = $titre;
			return $this;
		}
		return $this->titre;
	}
	
	
	public function description($description=null){
		if(!is_null($description)){
			$this->description = $description;
			return $this;
		}
		return $this->description;
	}

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
	
	$this->tabEvens = array();// Initialise le tableau avec un tableau vide
	$this->tabPublic = array();
	$this->tabPrive = array();
	$this->tabDate = array();
}	
	/**
*@public void function select(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini (set) le tableau $this->tabEvens
**/	
public function select(){
		$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos . " , " . $this->commissions . " , " . $this->ordredujour . " FROM " . $this->table . ";";
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
					
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
		
	}	
	/**
*@public void function select(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini (set) le tableau $this->tabEvens
**/	
public function selectDate(){
		$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos .  " , " . $this->commissions . " , " . $this->ordredujour . " FROM " . $this->table . " ORDER BY " . $this->hdebut . " DESC ;";
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
					$this->tabDate[] = array(
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
					
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
		
	}

		/**
*@public void function select(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini (set) le tableau $this->tabEvens
**/	
public function selectPublic(){
		$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->lieu . " , " . $this->placesdispos .  " FROM " . $this->table . " WHERE " . $this->type . "='1' ORDER BY " . $this->hdebut . " DESC ;";
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
					$this->tabPublic[] = array(
					"primaryKee" => $ligne->evenement_id,
					"type" => $ligne->type,
					"ddebut" => $ligne->ddebut,
					"dfin" => $ligne->dfin,
					"hdebut" => $ligne->hdebut,
					"hfin" => $ligne->hfin,
					"titre" => $ligne->titre,
					"description" => $ligne->description,
					"lieu" => $ligne->lieu,
					"placesdispos" => $ligne->placesdispos
					
					);
					
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
		
	}
	
		/**
*@public void function select(void)
* crée et exécute la requête de la sélection de ttes les lignes de la table evenement
* Défini (set) le tableau $this->tabEvens
**/	
public function selectPrive(){
		$select = "SELECT " . $this->primaryKee . " , " . $this->type . " , " . $this->ddebut. " , " . $this->dfin . " , " . $this->hdebut . " , " . $this->hfin . " , " . $this->titre . " , " . $this->description . " , " . $this->commissions . " , " . $this->ordredujour .  " FROM " . $this->table . " WHERE " . $this->type . "='2' ORDER BY " . $this->hdebut . " DESC ;";
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
					$this->tabPrive[] = array(
					"primaryKee" => $ligne->evenement_id,
					"type" => $ligne->type,
					"ddebut" => $ligne->ddebut,
					"dfin" => $ligne->dfin,
					"hdebut" => $ligne->hdebut,
					"hfin" => $ligne->hfin,
					"titre" => $ligne->titre,
					"description" => $ligne->description,
					"commissions" => $ligne->commissions,
					"ordredujour" => $ligne->ordredujour
					);
					
				}
			}
			
		}else{
			echo "impossible de se connecter à la base ";
		}
		
	}	
//	
//METHODE GET CLASS

public function render(){
		$event = $this; // Expose la variable $ttLesEvenements 
	
//if(get_class($this) == "EvenementPublic"){
//		include ("vues/vue-evenementspublics.php");
//	}else{
//		include ("vues/vue-evenementsprives.php");
//	
//}	
	
#--------------  OU 
//	
//if(property_exists($event, "lieu") && property_exists($event,"placesdispos")){
//	
//		include ("../Evenements/vues/vue-evenementspublics.php");
//	}else{
//		include ("../Evenements/vues/vue-evenementsprives.php");
//	}


	
}

	
}
	
	?>