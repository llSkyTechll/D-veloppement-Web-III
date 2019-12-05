<?php $titre = 'Les provinces de ce pays'; ?>

<?php ob_start(); ?>
<form class="pure-form pure-form-aligned" action="index.php?action=ListeProvincesDunPays" method="post"
	<fieldset>
        <div class="pure-control-group">
            <select name="pays" onchange="submit()">
								<?php
									while ($enregistrement=$result->fetch())
									{?>
										<option value='<?php echo $enregistrement['code_pays'] ?>'<?php if ($code_pays == $enregistrement['code_pays']) {?> selected <?php } ?>><?php echo $enregistrement['nom_pays']?></option>
									<?php
									}
								?>
            </select>
        </div>
	</fieldset>
</form>
<?php
if (isset($_POST['pays'])) { ?>
	<div class="pure-control-group">
		<label><h2>Province : </h2></label>
	</div>
	<div class="pure-control-group">
			<?php
				while ($enregistrement=$provinces->fetch()) {
					echo $enregistrement['nom_province'].'</br>';
				}
			?>
	</div>
<?php } ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
