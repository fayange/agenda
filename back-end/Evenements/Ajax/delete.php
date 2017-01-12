<?php
/**
 * @name delete.php : Script appelé en Ajax permettant la suppression d'un événement
 **/
require_once(dirname(__FILE__) . "/../../../appLoader.class.php");

$clePrimaire = $_POST["idPost"];

// On devrait procéder au traitement lui-même...
require_once("../modele/evenements.class.php");
$evenement = new evenements();
$evenement->delete($clePrimaire);

// Prépare l'information à retourner au script jQuery
$resultat = array(
		"statut" => 1,
		"row" => "row_" . $clePrimaire
);

// On envoie le tout vers la sortie standard
/**
 {
 "statut": 1,
 "row": "row_1"
 }
 **/
echo json_encode($resultat);
