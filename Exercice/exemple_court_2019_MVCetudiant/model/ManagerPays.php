<?php

require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class ManagerPays extends Connexion // hérite de la classe connexion
{
  public function getProvinces($code_pays){
  	$sql =  'SELECT * FROM tbl_pays inner join tbl_province on tbl_province.code_pays = tbl_pays.code_pays
  	where tbl_pays.code_pays = :code_pays order by nom_province;';
  	$Province = self::getConnexion()->prepare($sql);
  	$Province->bindparam('code_pays',$code_pays,pdo::PARAM_STR)  ;
  	$Province->execute();
  	return $Province;
	}
}

?>
