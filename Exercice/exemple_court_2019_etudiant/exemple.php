<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemple ajax</title>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/JavaScript" src="jquery-3.3.1.min.js"></script>

</head>
<body>
<div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-2-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-3-5">
        <form class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <img id = "CDN" src="canada.png" alt="Canada">
                </div>
            </fieldset>
        </form>
        <!-- Pour retourner le code généré par Ajax -->
        <div class="pure-control-group">
            <div id="provinces"></div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $("#CDN").click(afficheProvinces);
});

function afficheProvinces(){
  var monId = this.id;
  $.ajax({
        url 	: "traitement.php",
        type 	: "POST",
        data 	: {code_pays:monId},
        success : function(output){
                  $('#provinces').html(output);
                },
        error	: function(){
                  $('#provinces').html("Désolé, aucun résultat trouvé.");
                }
  });

}
</script>
</body>
</html>
