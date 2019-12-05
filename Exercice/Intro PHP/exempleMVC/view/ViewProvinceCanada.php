<?php $titre = 'Province du Canada'; ?>

<?php ob_start(); ?>


<div class="pure-control-group">
<?php while ($enregistrement=$resultatProvinceCanada->fetch())
        { ?>
            <legend><?php echo $enregistrement['nom_province'] ?></legend>	
    <?php }	
    $resultatProvinceCanada->closeCursor(); ?>
</div> 

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

