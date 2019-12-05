<?php

require 'controlleur/controlleur_liste_professeurs.php';

try {
		listeDepartement();
	}
catch (PDOException $e) {
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';

} ?>
