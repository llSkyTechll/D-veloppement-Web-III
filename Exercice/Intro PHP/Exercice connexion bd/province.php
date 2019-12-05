<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion au localhost</title>
  </head>
  <body>
    <h1>Provinces:</h1><br/>
    <?php
      try {
        $options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);
        $connexion = new PDO('mysql:host=localhost;dbname=bd_mondial','root','', $options);
        //1.//$result = $connexion->query('SELECT nom_province FROM tbl_province');
        //2.//$result = $connexion->query('SELECT nom_province FROM tbl_province WHERE code_pays = "CDN"');
        //3.//$result = $connexion->prepare('SELECT nom_province FROM tbl_province WHERE code_pays = :codepays');
        // //$result->execute(array('codepays' => 'CDN'));
        /*4.*/$result = $connexion->prepare('SELECT nom_province FROM tbl_province WHERE code_pays = :pays');  //Meilleur méthode
        /*  */$country = 'CDN';
        /*  */$result->bindParam(':pays', $country, PDO::PARAM_STR);
        /*  */$result->execute();
        while ($data = $result->fetch()) {
          echo $data['nom_province'].'<br/>';
        }
        $result->closeCursor();
      } catch (PDOException $error) {
        echo 'Erreur : '.$error->getMessage();
      }
    ?>
  </body>
</html>
