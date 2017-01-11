<?php
/**
* @name imageUploadAndSave : Service d'upload et de stockage dans la base de données
**/
require_once("../../imageUpload.class.php");

class imageUploadAndSave extends imageUpload {
	public function __construct($fieldName){
		parent::__construct($fieldName);
	}
	
	/**
	* @overload uploadFile::process() pour intégrer le stockage en base de données
	**/
	public function process(){
		$fileName = parent::process(); // Méthode process() de la classe uploadFile
		if(!is_null($fileName)){
			$this->save($fileName);
			return true;
		}
		return false;
	}
	
	private function save($fileName){
		$insert = "INSERT INTO media(file,type,date) VALUES ('" . $filename . "','image','" . date("Y-m-d") . '");";
	}
}
