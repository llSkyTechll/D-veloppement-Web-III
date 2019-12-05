<?php 
$titre = 'Un formulaire de retour d\'erreur  via AJAX'; 
$lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
$gestion_ajax='type="text/javascript" src="gestion_client.js"';
?>
<?php ob_start(); ?>
      
        <form name="mon_formu"  id="mon_formu" action="index.php?action=verification" method="POST" class="pure-form pure-form-aligned mon_formu">
            <div id="resultat"  class="pure-controls" style="color:#F00"  >
                <!-- Nous allons afficher un retour en jQuery au visiteur -->
            </div>  
             <div class="pure-control-group"> 
                <label for="nom">Nom  : </label><input type="text" id="nom" name="nom"/>
            </div>
            <div class="pure-control-group">
                <label for="prenom">Prénom : </label><input type="text" id="prenom" name ="prenom"/>
            </div>
            <div class="pure-controls">
                <input type="submit" id="submit" class="pure-button pure-button-primary" value="Se connecter !" />
            </div>
        </form>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

