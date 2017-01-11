<?php
/**
* @name uploadFile.class.php : Services de gestion des uploads de fichiers
* @author webDev - 2017
* @package Classes\File
* @version 1.0
**/
class uploadFile {
	/**
	* Tableau de stockage des types MIMES autorisés pour l'upload
	* @var array $mimes
	**/
	protected $mimes;

	
	/**
	* Nom du champ concerné par l'upload dans le formulaire
	*	@var string $fieldName
	**/
	protected $fieldName;
	
	/**
	* Détermine le dossier dans lequel on uploade les fichiers
	* @var string $uploadPath
	**/
	protected $uploadPath;
	
	/**
	* Instancie un nouvel objet de gestion d'upload
	*	@param string $fieldName => Nom du champ à traiter pour cet upload
	*	Utilisation : $uploadFile = new uploadFile("image");
	**/
	public function __construct($fieldName){
		$this->fieldName = $fieldName;
		/**
		* Attention : le calcul du chemin relatif doit être fait à partir du script en cours d'exécution
		**/
		$this->uploadPath = "upload/";
	}
	
	/**
	* Ajoute un type MIME à la liste des types MIME à autoriser
	*	@param string | array $mimeType
	*	@return \uploadFile
	* Utilisation :
	*	$uploadFile = new uploadFile();
	*	$uploadFile->addMime("image/jpeg")
	*		->addMime("image/png")
			->addMime(array("image/jpeg","image/png","image/gif"))
			->addMime("image")
			->addMime("office");
			->addMime("application/text")
	**/
	public function addMime($mimeType){
		if(is_array($mimeType)){
			$this->mimes = $mimeType;
		} else {
			// y-a-t-il un / dans le mime qui a été passé ?
			if(strpos($mimeType, "/")){
				if(!in_array($mimeType,$this->mimes)){
					$this->mimes[] = $mimeType;
				}
			} else {
				switch(strtolower($mimeType)){
					case "image":
					case "images":
						$this->mimes = array("image/jpeg","image/png","image/gif");
					break;
					case "office":
						$this->mimes = array("application/msword", 
							"application/vnd.openxmlformats-officedocument.wordprocessinggml.document",
							"application/vnd.oasis.opendocument.text"
						);
					break;
					case "video":
						$this->mimes = array("video/*");
					break;
				}
			}
		}
		return $this;
	}
	
	/**
	* Traite l'upload du fichier proprement dit et retourne le chemin vers le fichier si tout est ok, ou null sinon
	**/
	public function process(){
		echo $_SERVER["PHP_SELF"];
		
		if(array_key_exists($this->fieldName, $_FILES)){
			// Ca signifie qu'un fichier a été transmis à partir du champ du formulaire identifié par $this->fieldName
			$tmpName = $_FILES[$this->fieldName]["tmp_name"]; // Nom du fichier temporaire (xxxx9999.php stocké dans /tmp du serveur)
			if($tmpName != ""){
				// C'est bon, on peut continuer... le fichier est bien présent
				if($this->mimeAuthorized($tempName)){
					$newName = $this->checkName($_FILES[$this->fieldName]["name"]);
					// Le type MIME est autorisé, on peut continuer
					if($_FILES[$this->fieldName]["error"] == UPLOAD_ERR_OK){
						// Calcule le chemin relatif du dossier upload/ ici
						$fullPath = "../../" . $this->uploadPath;
						move_uploaded_file($tmpName,$fullPath . $newName); // de tmp/xxxx9999.php à upload/monfichier.ext
						return $this->uploadPath . $newName; // upload/monfichier.ext
					}
				}
			}
		}
	}
	
	/**
	* Retourne vrai, si le type mime du fichier temporaire fait partie de la liste des types autorisées
	*	@param string $tempName : Nom du fichier temporaire uploadé
	*	@return boolean
	**/
	protected function mimeAuthorized($tempName){
		$mimeType = mime_content_type($tempName);
		return in_array($mimeType,$this->mimes);
	}
	
	/**
	* Vérifie si le fichier n'existe pas déjà dans le dossier upload
	*	Retourne le nom du fichier éventuellement modifié
	**/
	protected function checkName($fileName){
		return $fileName;
	}
	
	
}