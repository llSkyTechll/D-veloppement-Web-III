<?php
  include("validate_connexion.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->


<link rel="stylesheet" href="utilisateur.css">
</head>
<<body>
<div class="pure-g">
    <div class="pure-u-1 pure-u-md-3-3 pure-u-lg-5-5">
        <?php
        $menu = 'admin1';
        include("menu.php");
        ?>
    </div>
    <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5">
         <div class="l-box">
                 <div class="splash">
            <h3>La gestion des inscriptions...</h3>
        </div>
    </div>
</div>
</body>
</html>
