<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice cookies</title>
  </head>
  <body>
    <?php
      if (!empty($_POST['name']) and (!empty($_POST['choix']))){
        setcookie('name',htmlentities($_POST['name']),time() + 365 * 24 * 3600,null,null,false,true);
        setcookie('choice',htmlentities($_POST['choix']),time() + 365 * 24 * 3600,null,null,false,true);
        echo 'Salutation '.htmlentities($_POST['name']);
        if (htmlentities($_POST['choix']) == 'animaux') {
          echo '<img src=\'ima.jpg\'>';
        } else {
          echo '<img src=\'witcher-banner.jpg\'>';
        }
      }else {
        if (!empty($_COOKIE['name'])) {
          echo 'Bonjour '.htmlentities($_COOKIE['name']);
          if (htmlentities($_COOKIE['choice']) == 'animaux') {
            echo '<img src=\'ima.jpg\'>';
          } else {
            echo '<img src=\'witcher-banner.jpg\'>';
          }
        }
      }
    ?>
  </body>
</html>
