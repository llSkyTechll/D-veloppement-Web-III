<?php
require('controller/Controllers.php');

try {
	if (isset($_GET['action'])) {
		switch ($_GET['action'] ) {
			case 'ListePaysCapitaleProvince':
				ListePaysCapitaleProvince();
				break;
			case 'ListeProvincesDunPays':
				if (isset($_POST['pays'])){
					ListeProvincesDunPays($_POST['pays']);
				}
				else {
					ListeProvincesDunPays(null);
				}
				break;
			default :
				throw new Exception('Aucune page spécifique demandée');
		}
	}
	else {
		ListePaysCapitaleProvince();
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
