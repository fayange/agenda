<?php
/**
* @name dbConnect.class.php : service de connexion à une base de données
*	Design Pattern : Class Factory
**/

/**
* Requiert le fichier qui contient les constantes d'informations de connexion
**/

require("../../_const/dbConfig.class.php");

require("../../classes/Database/Connexion.class.php");
//require("/formation-dev/agenda/classes/Database/MySQL.class.php");
require("../../classes/Database/PostgreSQL.class.php");
require("../../classes/Database/Oracle.class.php");
require("../../classes/Database/MySQLconfig.class.php");

class dbConnect{
	/**
	* private mixed $base : Instance de connexion à une base de données ou faux, si la connexion a échoué
	**/
	private $base;
	
	
	public function __construct(){
		#echo "contructeur dbConnect";
		
		$connecteur = dbConfig::$sgbd; // => MySQL
		
		$connexion = new $connecteur();
		$connexion->connect();
		$this->base = $connexion->getConnexion();
		#echo "BASE";
		#var_dump($this->base);

	}
	
	/**
	* public mixed getBase(void)
	*	@return mixed : Instance de connexion à la base de données ou faux
	**/
	public function getBase(){
		#echo "BASE222";
		#var_dump($this->base);
		return $this->base;
	}
}

?>
