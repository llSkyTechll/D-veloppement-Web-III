
<?php
    require('model/ManagerCoursProfesseurs.php');
	
	function listeDepartement(){
		$departement = new managerCoursProfesseurs;
		$ListeDepartement =$departement->getDepartement();
		require 'view/vue_departement.php';
	}
?>   