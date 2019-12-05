<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your page title</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <!--<![endif]-->
</head>


<body>
<div class="pure-g">
    <div class="pure-u-1-5">
    </div>
    <div class="pure-u-4-5"> 
        <form  class="pure-form pure-form-aligned" action="bonjour.php" method = "post">  
        <!--Il faut un name pour que le POST fonctionne-->
           <fieldset>
            	<h3>Noms et choix de repas</h3>
                <div class="pure-control-group">
                    <label for="prenom" >Prénom : </label>      
                    <input type="text" id ="prenom" name="prenom"> 
                </div>
                <div class="pure-control-group">
                        <label for="nom" >Nom : </label>
                        <input type="text" id ="nom" name="nom">
                </div>
                <div class="pure-control-group">
                        <label for="choix_repas" >Choix de repas : </label>
                            <select  id = "choix_repas" name="repas">
                                 <option>Sandwich au jambon</option>
                                 <option>Sandwich au poulet</option>
                                 <option>Sandwich au oeufs</option>
                            </select>  
                </div>
                <div class="pure-controls">
                    <button class="pure-button pure-button-primary" type="submit">Envoyer</button>
                </div>
            </fieldset>
        </form>
	</div>
    <div class="pure-u-1-5">
    </div>
    <div class="pure-u-4-5">
        <a href="bonjour.php?nom=Reny&amp;prenom=Alexandre&amp;max=4">Dis-moi bonjour !</a>
    </div>
</div>
</body>
</html>
