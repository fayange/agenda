<?php
/**
* @name imageUpload.class.php : Upload spécifique des fichiers images
**/
require_once("uploadFile.class.php");

class imageUpload extends uploadFile {
	
	/**
	* Utilisation :
	*	$imageUpload = new imageUpload();
	**/
	public function __construct($fieldName){
		$this->fieldName = $fieldName;
		$this->mimes = array("image/jpeg", "image/png", "image/gif");
	}
}