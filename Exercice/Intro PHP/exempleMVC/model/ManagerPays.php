<?php

require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class ManagerPays extends Connexion // hérite de la classe connexion
{
   // Renvoie la liste des membres triés par nom dans l'ordre alphabétique 
   public function getProvince() { 
       $sql = 'SELECT * FROM tbl_province order by nom_province'; 
	   $province = self::getConnexion()->query($sql);   // exécution directe , self:: opérateur de résolution de portée pour appeler des éléments appartenant à telle classe et non à tel objet
	   return $province;        
    } 
	
	public function getNomProvinceCanada() {
		$sql = 'SELECT * FROM tbl_province where code_pays = :code_pays order by nom_province'; 
		$provinceDuCanada = self::getConnexion()->prepare($sql);   // exécution directe 
		$code_pays = 'CDN';
		$provinceDuCanada->bindparam('code_pays',$code_pays,pdo::PARAM_INT)  ;
		$provinceDuCanada->execute();
		return $provinceDuCanada; 	
	}

}

?>