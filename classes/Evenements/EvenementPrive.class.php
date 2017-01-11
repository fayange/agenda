<?php
/**
 * @name EvenmentPublic.class.php 
 * @package /Objet/Initiation/agenda/classes
 * @version 1.0
 * @author Stéphanie CAUMONT - 2016 - 2017
**/


require_once("DefinitionsEvenement.class.php");

class EvenementPrive extends DefinitionsEvenement{
	
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
	
		
//public function __construct(){
//parent::__construct();	
//	
//}
	
public function commissions($commissions=null){
	if(!is_null($commissions)){
		$this->commissions = $commissions;
		return $this;
	}
		return $this->commissions;
	}
	

public function ordredujour($OrdreDuJour=null){
		if(!is_null($OrdreDuJour)){			
			if(!is_int($OrdreDuJour)){
			$this->ordredujour = $OrdreDuJour;
			return $this;
		}
			}
		return $this->ordredujour;
	}
	
//public function __construct(){
//	$this->vue = "vues/vue-evenements.php"; 
//
//	
}


?>