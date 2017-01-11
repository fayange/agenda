<?php
/**
*dateHelper.class.php : services statiques de traitement de données de type date et heure
*
**/




class dateHelper {
	

private static $mois = array(
	"Janvier",
	"Février",
	"Mars",
	"Avril",
	"Mai",
	"Juin",
	"Juillet",
	"Août",
	"Septembre",
	"Octobre",
	"Novembre",
	"Décembre"
	
	);
	
	
	
/**
* public : accessible de n'importe quel endroit (monde exterieur)
* static : la méthode est appelée sans avoir besoin d'instancier un objet au préalable (dateHelper::toFrDate)
* final : elle ne pourra donc pas être surchargée dans une éventuelle classe fille
* date au format US (AAAA-MM-JJ) vers format fr (JJ-MM-AAAA)
* @var string $strDate : chaine contenant une date au format US
**/	
public static final function toFrDateJour($strDate){
	// Utilisation la classe interne DateTime pour créer un objet de type DateTime
	$oDate = new DateTime($strDate);
	return $oDate->format("d-m-Y");
		
}
	
public static final function toFrDate($strDate, $outFormat="d-m-Y", $moisEnClair=false){
	// Utilisation la classe interne DateTime pour créer un objet de type DateTime
	$oDate = new DateTime($strDate);
	
	$mois = $oDate->format("n");// la valeur correspondante au mois au format numerique entier de 1 à 12
	$indice = $mois - 1; //Un tableau ça part toujours de 0
	$moisEnClair = self::$mois[$indice];// SELF La classe elle même (dans la classe on cherche $mois Attribut de la classe)
	
	if(!$moisEnClair)
	return $oDate->format($outFormat);
	
	return $oDate->format("d") . " " . $moisEnClair . " " . $oDate->format("Y");
		
}
		
	
public static final function toUsJour($strDate){
	$oDate = new DateTime($strDate);
	return $oDate->format("Y-m-d");
	
	
}	
	
	
public static final function toUsDate($strDate, $format="d-m-Y"){
	#echo $strDate . "(" . $format . ") <br>\n" ;
	$oDate = DateTime::createFromFormat($format, $strDate);
//	$oDate = new DateTime($strDate);
	return $oDate->format("Y-m-d");
	
	
}	
	

	
	
	
	
	
}

?>