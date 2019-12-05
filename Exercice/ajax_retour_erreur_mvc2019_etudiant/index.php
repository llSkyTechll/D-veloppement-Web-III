<?php
require 'controlleur/controlleur_client.php';

try {
    if  (!empty($_GET['action'])){
        if ($_GET['action']=="autre"){
            afficheAutre();
        }
        else {
            if ($_GET['action']=="verification"){
                if( isset($_POST['nom']) && isset($_POST['prenom'])){
                    verifieInformations(htmlentities($_POST['nom']),htmlentities($_POST['prenom']));
                }
                else {
                    formulaire();
                }
            }
        }
    }
   else {
        formulaire();
   }
}
catch (PDOException $e) {
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';

} ?>
