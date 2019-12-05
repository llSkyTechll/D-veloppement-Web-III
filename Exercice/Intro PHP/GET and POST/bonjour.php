<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body>
    <?php
    //GET
    if (!empty($_GET['nom']) and !empty($_GET['prenom']) and !empty($_GET['max'])){
      $max    = htmlentities($_GET['max']);
      $prenom = htmlentities($_GET['prenom']);
      $nom    = htmlentities($_GET['nom']);
      
      $max = (int)$max;
      $max = ($max >= 1 and $max <= 100)?$max:1;
      
      for ($cpt = 0; $cpt < $max; $cpt ++){
        echo '<p>Bonjour '.$prenom.' '.$nom.'</div>!</p>';
      }
    }
    //POST
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['repas'])){
      $repas    = htmlentities($_POST['repas']);
      $prenom   = htmlentities($_POST['prenom']);
      $nom      = htmlentities($_POST['nom']);
      
      echo '<p>Bonjour '.$prenom.' '.$nom.', votre repas est '.$repas.'</div>!</p>';
    }
    ?>
  </body>
</html>