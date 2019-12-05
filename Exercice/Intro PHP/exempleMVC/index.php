<?php
require('controller/Controllers.php');

try {
	if (isset($_GET['action'])) {
		switch ($_GET['action'] ) {
			case 'ListeProvince':
				ListeProvince();
				break;
			case 'ListeProvincesDuCanada':	
				ListeProvincesDuCanada();
				break;
			default :
				throw new Exception('Aucune page spécifique demandée');	
		}
	}	
	else {
		ListeProvince(); 
	}
}

catch (PDOException $e) {
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';
 }
 catch (Exception $ex) {
  $msgErreur = $ex->getMessage();
  require 'view/vueErreur.php';
 }
?>
