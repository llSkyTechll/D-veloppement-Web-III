<?php $titre = 'Provinces'; ?>

<?php ob_start(); ?>

<div class="pure-control-group">
<?php while ($enregistrement=$resultatProvince->fetch())
        { ?>
            <legend><?php echo $enregistrement['nom_province'] ?></legend>	
    <?php }	
    $resultatProvince->closeCursor(); ?>
</div> 

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>