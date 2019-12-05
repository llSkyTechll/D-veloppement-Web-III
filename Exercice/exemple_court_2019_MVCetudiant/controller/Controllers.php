<?php
require('model/ManagerPays.php');


function afficheDrapeau()
{
	require('view/ViewAfficheDrapeau.php');
}


function listeProvinces($code_pays){
	$nomProvince = new managerPays;
	$Province = $nomProvince->getProvinces($code_pays);
  require('view/ViewAfficheProvince.php');
}?>
