<?php 
$titre = 'Les départements'; 
$lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
$gestion_ajax='type="text/javascript" src="gestion_departement.js"';
?>
<?php ob_start(); ?>

<?php
echo '<H1>' . 'Les 7 premiers caractères sont : ' . mb_substr($titre,0,7) . '</H1>';
?>
<form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="lst_departement">Sélectionnez un département :</label>
            <select id="lst_departement" name="lst_departement" >
                <option value="">Sélectionner:</option>
                <?php
                    while ($ligne = $ListeDepartement->fetch())
                    {
                      echo "<option value=".$ligne['id_departement'].">";
                      echo iconv('ISO-8859-1','UTF-8',$ligne['nom_departement']) . "</option>";
                    }
                    $ListeDepartement->closeCursor();
                ?>
            </select> 
        </div>
        <!-- Pour retourner le code généré par Ajax --> 
        <div class="pure-control-group">     
            <div id="liste_des_professeurs"></div>
        </div>
     </fieldset>
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

