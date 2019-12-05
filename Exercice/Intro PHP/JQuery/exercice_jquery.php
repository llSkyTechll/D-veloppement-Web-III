<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice ensemble</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->
    <script type="text/javascript" src="jquery-validation-1.19.1/lib/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="jquery-validation-1.19.1/dist/localization/messages_fr.js"></script>
    <style>
    	.maClasseErreur {
    		color:#FF0000;  /* red */
      }
    </style>
    <link rel="stylesheet" href="couleur_textbox.css">
    <script type="text/javascript" src="couleur_textbox.js"></script>
  </head>
  <body>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
      </div>
      <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5 form-box"> <!-- pour centrer -->
        <h1>Formulaire</h1>
        <form class="pure-form pure-form-aligned" id="monFormulaire" method="Post" action="autrePage.php" type="actionForm">
          <fieldset>
            <h2>Vos renseignements</h2>
            <div class="pure-control-group">
              <label for="decade">Décennie fétiche:</label>
              <input  id="decade" name="decade"  type="text" />
            </div>
            <div class="pure-control-group">
              <label for="age">Âge</label>
              <input  id="age" name="age"  type="text" />
            </div>
            <div class="pure-control-group">
              <label for="favoriteURL">URL préférée:</label>
              <input  id="favoriteURL" name="favoriteURL" type="text" />
            </div>
            <div class="pure-control-group">
              <label for="validationURL">URL de validation:</label>
              <input  id="validationURL" name="validationURL" type="text" />
            </div>
            <div class="pure-controls">
              <input class="submit pure-button pure-button-primary" type="submit" value="Se connecter"/>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <script>
      // votre code de validation...
      $("#monFormulaire").validate({
        onfocusout: function(elements){
          this.element(elements)
        },
        errorClass: "maClasseErreur",
        errorElement : "em",
        rules :{
          decade:{
            required : true,
            number : true,
            step : 10
          },
          age :{
            required : true,
            number : true,
            range : [0, 110]
          },
          favoriteURL :{
            required : true,
            url : true
          },
          validationURL :{
            required : true,
            equalTo : favoriteURL
          },
        },
        messages: {
          decade :{
            required: "La décennie est obligatoire.",
            number : "La décennie doit être un nombre."
          },
          age :{
            range : "L'âge doit être entre 0 et 110."
          },
          favoriteURL :{
            url : "Arrête de fuck-around et mets un vrai url plz."
          }
        }
      });
    </script>
  </body>
</html>
