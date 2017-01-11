<?php
/**
 * @name EvenmentPublic.class.php 
 * @package /Objet/Initiation/agenda/classes
 * @version 1.0
 * @author Stéphanie CAUMONT - 2016 - 2017
 **/



require_once("DefinitionsEvenement.class.php");

class EvenementPublic extends DefinitionsEvenement{
	


	
	
/**
*private var
* @var int $placeDispos : Nombre de places pour la réunion 
**/		
private $placesdispos;
	
	
//public function __construct(){
//parent::__construct();	
//	
//}

	
	
public function lieu($lieu=null){
		if(!is_null($lieu)){
			$this->lieu = $lieu;
			return $this;
		}
		return $this->lieu;
	}
	
public function placesdispos($placeDispos=null){
		if(!is_null($placeDispos)){		
			if(is_int($placeDispos)){
				$this->placesdispos = $placeDispos;
				return $this;
			}
		}
	return $this->placesdispos;
	}
	


	
}


?>