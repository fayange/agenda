
<?php
/**
 * @name EvenmentPublic.class.php 
 * @package /Objet/Initiation/agenda/classes
 * @version 1.0
 * @author Stéphanie CAUMONT - 2016 - 2017
**/

require("../Database/dbConnectConfig.class.php");
require_once("DefinitionsEvenement.class.php");

class listingEvenements extends DefinitionsEvenement{
	
/**
* @var private array $champs : Stocker les objets des champs créés dans la contrôleur
**/
private $ttLesEvenements = array();	

	
/**
* @var private array $champs : Stocker les objets des champs créés dans la contrôleur
**/
private $events = array();		
	
/**
* Permet de définir l'ordre dans lequel les champs pourront être restitués
* @var int $ordre : N° d'ordre du champ
**/
protected $ordre;	

/**
* Tableau contenant les objets événements créés dans le contrôleur
*	@var array $evenements
**/
private $evenements = array();
	
	
/**
*	Méthode permettant l'ajout d'un objet champ dans le tableau des champs du formulaire
* 	@param string $cleChamp : Clé du tableau associatif pour la récupération du champ
*	@param object $champ : Un champ de formulaire
**/
public function ajouterChamp($objetChamp){
		if(is_object($objetChamp)){
			$this->events[$objetChamp->id()] = $objetChamp; 
		}
		return $this; // Retourne l'objet lui-même pour chaînage éventuel de méthodes
	}
			
public function recupererEvenement(){	
		
		$tabloEvenement = array(); // Servira à trier les champs dans l'ordre souhaité
		$tabloEvenementFinal = array(); // Tableau à retourner finalement
		
		// Boucler sur le tableau des ttLesEvenementsas ($this->ttLesEvenementsas)
		foreach($this->events as $cle =>$events){ // Parcourir séquentiellement tous les champs définis
			$tabloEvenement[$cle] = $evens->ordre(); // Récupérer attribut ordre des évènements concernés
		}
		
		krsort($tabloEvenement); // Fonction de tri permettant de trier le tableau associatif sur les valeurs
		
			foreach($tabloEvenement as $cle => $value){
			$tabloEvenementFinal[$cle] = $this->events[$cle];
		}
		
	
		return $tabloEvenementFinal;
	}
	
	

		/**
	* Trie les événements par ordre chronologique inverse et retourne le tableau trié
	* @return array
	**/
	public function getAllByDate(){
		//1. Parcourt le tableau d'origine pour lister générer un tableau associatif
		//	avec la clé et la date de l'événement pour chaque occurrence
		$datesEvenement = array();
		foreach($this->events as $cle => $evenement){
			$datesEvenement[$cle] = $evenement->ddebut();//TABLEAU TEMPORAIRE VALEURS
		}
		// 2. Applique la fonction asort() pour trier le tableau temporaire
		asort($datesEvenement); // Du plus petit au plus grand... ça ne va pas...
		#var_dump($datesEvenement);
		//3. Parcourt le tableau trié pour récupérer les objets Evenement
		$tableauFinal = array(); // Reset le tableau temporaire utilisé
		foreach($datesEvenement as $cle => $value){
			$tableauFinal[$cle] = $this->events[$cle];
		}//ON REBOUCLE DANS LE TABLEAU OBJET $this->evenements[cle] POUR RECUPERE LES OBJETS
		
		return $tableauFinal;
	}
	
	
	public function getAllByTitre(){
		$titresEvenement = array();
		
		foreach($this->events as $cle => $evenement){
			$titresEvenement[$cle] = $evenement->titre;
		}
		
		asort($titresEvenement);
		
		$tableauFinal = array();
		
		foreach($titresEvenement as $cle => $value){
			$tableauFinal[$cle] = $this->events[$cle];
		}
		
		return $tableauFinal;
	}
	
	//	METHODE POUR FAIRE DES TRIS SUR DES ATTRIBURS COMMUNS 
	public function getAllBy($critereDeTriSouhaiter){
		
		$lesEvenement = array();
		
		foreach(events as $cle => $evenement){
			if($critereDeTriSouhaiter == "date"){
				$lesEvenement = $lesEvenement->ddebut();
			}else{
				$lesEvenement = $lesEvenement->titre();
			}
		}
		
		asort($lesEvenement);
		
		$tableauFinal = array();
		
		foreach($lesEvenement as $cle => $value){
			$tableauFinal[$cle] = $this->events[$cle];
		}
		
		return $tableauFinal;
	}
	
	
	/**
	* Ajoute un événement à la collection courante en calculant une clé, qui servira
	*	à traiter les extractions ultérieurement
	* @return \Agenda
	**/
	public function addEvenement($evenement){
		// Calcule la clé à partir du nombre de lignes du tableau
		$indice = sizeof($this->evenements) + 1;
		
		$cle = "Evénement_" . $indice;
		
		
		if(is_object($evenement)){
			$this->evenements[$cle] = $evenement;
		}
		
		return $this;
	}
	
		//Pour faire directement un echo d'un objet 
	public function __toString(){
		
		$sortie = "<ul>";
		
		foreach($this->evenements as $cle => $evenement){
			$sortie .= "<li>[" . $cle . " contient l'événement : " . $evenement->titre . "</li>";
		}
		
		$sortie .= "</ul>";
		
		return $sortie;
		
		}
	
	/**
	* Trie les événements par ordre chronologique inverse et retourne le tableau trié
	* @return array
	**/
	public function getAllByDateAgenda(){
		//1. Parcourt le tableau d'origine pour lister générer un tableau associatif
		//	avec la clé et la date de l'événement pour chaque occurrence
		$datesEvenement = array();
		foreach($this->evenements as $cle => $evenement){
			$datesEvenement[$cle] = $evenement->ddebut();//TABLEAU TEMPORAIRE VALEURS
		}
		// 2. Applique la fonction asort() pour trier le tableau temporaire
		asort($datesEvenement); // Du plus petit au plus grand... ça ne va pas...
		#var_dump($datesEvenement);
		//3. Parcourt le tableau trié pour récupérer les objets Evenement
		$tableauFinal = array(); // Reset le tableau temporaire utilisé
		foreach($datesEvenement as $cle => $value){
			$tableauFinal[$cle] = $this->evenements[$cle];
		}//ON REBOUCLE DANS LE TABLEAU OBJET $this->evenements[cle] POUR RECUPERE LES OBJETS
		
		return $tableauFinal;
	}
	
	
	
	public function getAllByTitreAgenda(){
		$titresEvenement = array();
		
		foreach($this->evenements as $cle => $evenement){
			$titresEvenement[$cle] = $evenement->titre;
		}
		
		asort($titresEvenement);
		
		$tableauFinal = array();
		
		foreach($titresEvenement as $cle => $value){
			$tableauFinal[$cle] = $this->evenements[$cle];
		}
		
		return $tableauFinal;
	}
	


public function tri(){
	
// Connexion à la base de donnée
$connexion = new dbConnect();
$base = $connexion->getBase();

// Le nom de notre table
$tablename = 'evenement';


// Tri sur colonne
$tri_autorises = array('evenement_id','ddebut','type=2', 'type=3');
$order_by = in_array($_GET['order'],$tri_autorises) ? $_GET['order'] : 'evenement_id';


// Sens du tri
$order_dir = isset($_GET['inverse']) ? 'DESC' : 'ASC';


// Préparation de la requête
$sql = "
    SELECT *
    FROM {$tablename}
    ORDER BY {$order_by} {$order_dir}
";
$result = mysql_query($sql);

}
// Notre fonction qui affiche les liens
function sort_link($text, $order=false)
{
    global $order_by, $order_dir;

    if(!$order)
        $order = $text;

    $link = '<a href="?order=' . $order;
    if($order_by==$order && $order_dir=='ASC')
        $link .= '&inverse=true';
    $link .= '"';
    if($order_by==$order && $order_dir=='ASC')
        $link .= ' class="order_asc"';
    elseif($order_by==$order && $order_dir=='DESC')
        $link .= ' class="order_desc"';
    $link .= '>' . $text . '</a>';

    return $link;
}
	
	
	
	
}
