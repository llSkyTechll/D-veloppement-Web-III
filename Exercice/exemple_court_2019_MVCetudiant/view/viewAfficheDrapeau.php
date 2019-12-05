<?php
$titre = 'Les provinces';
$lien_ajax='type="text/JavaScript" src="js/jquery-3.3.1.min.js"';
$gestion_ajax='type="text/JavaScript" src="js/gestionProvinces.js"';
?>
<?php ob_start(); ?>


        <form class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <img id = "CDN" src="images/canada.png" alt="Canada">
                </div>
            </fieldset>
        </form>
        <!-- Pour retourner le code généré par Ajax -->
        <div class="pure-control-group">
            <div id="provinces"></div>
        </div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
