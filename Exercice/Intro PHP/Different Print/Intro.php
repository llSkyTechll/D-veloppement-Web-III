<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <?php
      $vname = "Alexandre"; 
      echo "Salut $vname <br/>"; //Fonctionnel
      echo 'Salut $vname <br/>'; //Non fonctionnel
      echo 'Salut ' . $vname . '<br/>'; //Fonctionnel (Plus utilisé)
      echo 'J\'ai faim'; // "\" pour annuler l'effet du guillemet
    ?>
  </body>
</html>