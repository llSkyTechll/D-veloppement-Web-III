<?php 
$titre = 'Autre'; 
$lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
$gestion_ajax='type="text/javascript" src="gestion_client.js"';
?>
<?php ob_start(); ?>
        Vous êtes sur une autre page....

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>