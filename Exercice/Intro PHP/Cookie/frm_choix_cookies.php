<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your page title</title>

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
      <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5">
      </div>
      <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-3-5 ">
        <form method="post" action="frm_preference.php" class="pure-form pure-form-aligned">
          <fieldset>
            <div class="form-group">
              <legend><h2>Vos préférences</h2></legend>
            </div>

            <div class="pure-control-group">
              <label for="nom">Votre nom : </label>
              <input type="text" id ="nom" name= "name">
            </div>
            <div class="pure-control-group">
              <label for="choix" >Quel sujet préférez-vous ?</label>
              <input type="radio" name="choix" value="animaux" id="animaux" checked="checked"/>animaux

              <input type="radio" name="choix" value="paysage" id="paysage"/>paysage
            </div>
            <div class="pure-controls">
              <button class="pure-button pure-button-primary" type="submit" name="Submit">Envoyer</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
