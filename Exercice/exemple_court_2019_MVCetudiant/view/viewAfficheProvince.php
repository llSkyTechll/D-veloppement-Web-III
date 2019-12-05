<div class="pure-control-group">
	<label><h2>Provinces : </h2></label>
</div>
<div class="pure-control-group">
<?php while ($enregistrement=$Province->fetch())
        { ?>
            <legend><?php echo $enregistrement['nom_province'] ?></legend>	
    <?php }	
    $Province->closeCursor(); ?>
</div> 