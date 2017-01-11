<?php
/**
 * @name MySQL.class.php Définition d'une connexion à une base de données mySQL
 * @author webdev 2016 - 2017
 * @package /Objet/Initiation/Classes/Database
 * @version 1.0 Extension de la classe Connexion
 * @see Connexion.class.php
**/

require_once("Connexion.class.php");

class MySQL extends Connexion {
	
	/**
	* @var string $dsn : conserve la chaîne de connexion à la base de données
	**/
	private $dsn;
	
	/**
	* @var string $message : Stocke l'éventuelle erreur de connexion à la base de données
	**/
	private $message;
	
	/**
	* Constructeur de l'instance d'une connexion mySQL
	* Définit les valeurs nécessaires pour se connecter
	**/
	public function __construct(){
		// Définit les paramètres de connexion à ma base de données
		$this->host = "127.0.0.1";
		$this->port = 3306;
		$this->userName = "toyafay";
		$this->password = "pmolki90@j";
		$this->dbName = "authentification";
		// Appeler la méthode privée pour calculer la chaîne de connexion
		$this->dsn = $this->setDSN();
	}
	
	/**
	* public boolean connect(void)
	*	Tente de se connecter à la base de données et retourne le statut de connexion
	*	@return boolean
	**/
	public function connect(){
		try{
			$connexion = new PDO($this->dsn, $this->userName, $this->password);
		}
		catch(Exception $e){
			$this->message = $e->getMessage() . " [" . $e->getCode() . "]";
			$this->setStatut(false);
			return false;
		}
		
			$this->setStatut(true);
			$this->setConnexion($connexion);
			return true;
	}
	
	/**
	* private string setDSN(void)
	*	@return string Chaîne de connexion à la base de données
	**/
	private function setDSN(){
		$dsn = "";
		
		// Création de la chaîne "dsn" de connexion à la base de données mySQL
		$dsn .= "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbName;
		
		return $dsn;
	}
}