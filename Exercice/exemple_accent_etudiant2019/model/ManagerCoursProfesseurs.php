<?php
require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class ManagerCoursProfesseurs extends Connexion
{
// Renvoie la liste de tous les départements
	public function getDepartement() {
		$sql='SELECT * FROM tbl_departement order by nom_departement';
		$Departement = self::getConnexion()->prepare($sql);
		$Departement->execute();
		return $Departement;
	}
}
?>