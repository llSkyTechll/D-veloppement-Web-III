<?php
  session_start();
  $_SESSION = array();
  session_destroy();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
      <!--[if lte IE 8]>
          <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
      <![endif]-->
      <!--[if gt IE 8]><!-->
          <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
      <!--<![endif]-->
  </head>
  <body>
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
        </div>
        <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-5 form-box"> <!-- pour centrer -->
        <form name="Connexion" method="post" action="frm_traitement.php" class="pure-form" >
          <fieldset>
            <legend><h3>Connexion</h3></legend>
            <label for="mot_passe">   Mot de passe : </label>
       			<input type="password" name="mot_passe" id="mot_passe">
            <input type="submit" name="Submit" value="Valider" class="pure-button pure-button-primary" >
        	</fieldset>
    	</form>
    </div>
  </body>
</html>
