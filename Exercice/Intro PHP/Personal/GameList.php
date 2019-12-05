<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game List</title>
  </head>
  <body>
    <h1>Games:</h1><br/>
    <?php
      try {
        $options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);
        $connexion = new PDO('mysql:host=localhost;dbname=bd_personal','root','', $options);
        $vResult = $connexion->prepare('SELECT steam_library.name AS game, game_developper.name AS dev
                                        FROM steam_library INNER JOIN game_developper
                                        ON steam_library.developper_id = game_developper.developper_id
                                        ORDER BY game_developper.name, steam_library.name');
        $vResult->execute();
        echo '<table>';
        while ($data = $vResult->fetch()) {
          echo '<tr><td>'.$data['game'].'</td><td>'.$data['dev'].'</td></tr><br/>';
        }
        echo '</table>';
        $vResult->closeCursor();
      } catch (PDOException $error) {
        echo 'Erreur : '.$error->getMessage();
      }
    ?>
  </body>
</html>
