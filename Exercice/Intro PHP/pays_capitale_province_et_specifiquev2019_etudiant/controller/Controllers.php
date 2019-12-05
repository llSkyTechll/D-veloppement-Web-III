<?php
  require('model/ManagerPays.php');

  function ListePaysCapitaleProvince()
  {
    $paysCapitaleProvince = new ManagerPays;
    $result = $paysCapitaleProvince->getPaysCapitaleProvince();
    require('view/ViewPaysCapitaleProvince.php');
  }

  function ListeProvincesDunPays($code_pays){
    $listePays = new ManagerPays;
    $result    = $listePays->getNomPays();
    $provinces = ListeProvinces($code_pays);
    require('view/ViewChoix.php');
  }

  function ListeProvinces($code_pays){
    $listeProvinces = new ManagerPays ;
    $result = $listeProvinces->getProvinces($code_pays);
    return $result;
  }
?>
