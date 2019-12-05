<?php $titre = 'Les pays, leur capitale et leur province'; ?>

<?php ob_start(); ?>
      <div id="accordion">
      <?php
        while ($enregistrement=$result->fetch())
        {?>
            <h3><?php echo $enregistrement['nom_pays'] ?></h3>
            <div><?php echo 'Province: '.$enregistrement['nom_ville'] ?>
            </br><?php echo 'Capitale: '.$enregistrement['nom_province'] ?></div>
        <?php
        }
      ?>
      </div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
