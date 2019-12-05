<?php
require('model/ManagerPays.php');

function ListeProvince()
{
   $Province = new ManagerPays;
   $resultatProvince =$Province->getProvince();
   require('view/ViewProvince.php');   
}


function ListeProvincesDuCanada(){
   $NomProvinceCanada = new ManagerPays;
   $resultatProvinceCanada =$NomProvinceCanada->getNomProvinceCanada();
   require('view/ViewProvinceCanada.php'); 
}

?>