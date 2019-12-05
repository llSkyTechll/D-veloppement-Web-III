<?php

require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class ManagerPays extends Connexion // hérite de la classe connexion
{
   // Renvoie la liste des membres triés par nom dans l'ordre alphabétique
   public function getPaysCapitaleProvince() {
     /*$sql =  'SELECT nom_pays, nom_ville, nom_province from tbl_pays
              INNER JOIN tbl_ville ON tbl_pays.capital = tbl_ville.no_ville
              INNER JOIN tbl_province ON tbl_province.no_province = tbl_ville.no_province';*/
     $sql = 'CALL paysCapitaleProvince';
	   $resultat = self::getConnexion()->query($sql);   // exécution directe , self:: opérateur de résolution de portée pour appeler des éléments appartenant à telle classe et non à tel objet
	   return $resultat;
    }

	public function getNomPays() {
		$sql = 'SELECT code_pays,nom_pays FROM tbl_pays ORDER BY nom_pays';
    $resultat = self::getConnexion()->query($sql);
    return $resultat;
	}


	public function getProvinces($code_pays){
		$resultat = self::getConnexion()->prepare('CALL province_pays(:pays)');
    $resultat->bindParam(':pays', $code_pays, PDO::PARAM_STR, 5);
    $resultat->execute();
    return $resultat;
	}
}

?>
