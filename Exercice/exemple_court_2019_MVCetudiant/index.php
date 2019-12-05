<?php
	require('controller/Controllers.php');

	try {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'afficheProvinces'){
				if (isset($_POST['code_pays'])){
					$code_pays = htmlentities($_POST['code_pays']);
					listeProvinces($code_pays);
				}
			}
		}
		else {
			afficheDrapeau();
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
