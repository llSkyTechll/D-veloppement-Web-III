<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>exercice ensemble</title>
<style>
label.error {
	color: red;
}
</style>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->

<script type="text/javascript" src="jquery-validation-1.15.0/lib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery-validation-1.15.0/dist/localization/messages_fr.js"></script>
</head>
<body >
<div class="pure-g">
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-3-5 form-box">

		<h1>Formulaire</h1>
        <form class="pure-form pure-form-aligned" id="frm_regexp" method="Post" action="test.php" type="actionForm">
          <fieldset>
          	<legend>Vos renseignements</legend>
            <div class="pure-control-group">
              <label for="telephone">telephone</label>
              <input  id="telephone" name="telephone"  type="text" />
            </div>
            <div class="pure-control-group">
              <label for="codePermanent">code permanent :</label>
              <input  id="codePermanent" name="codePermanent"  type="text" />
            </div>
            <div class="pure-control-group">
              <label for="email_reg_exp">email regexp :</label>
              <input  id="email_reg_exp" name="email_reg_exp"  type="text" />
            </div>
            <div class="pure-controls">
                <button class="pure-button pure-button-primary" type="submit">Se connecter</button>
            </div>
           </fieldset>
        </form>
    </div>
</div>
<script>
// code jquery validate
	$("#frm_regexp").validate(
		{ rules:
				{
					telephone :
				  {
						required : true,
				  	minlength : 2,
						regexp_phone: true
		 			},
			  	codePermanent :
					{
						required : true,
				  	minlength : 2,
						regexp_code : true
		  		},
					email_reg_exp :
					{
						required : true,
						minlength : 2,
						regexp_email : true
					}
				 },
		  messages:  {
		    			nom : { required : 'Le nom est obligatoire',
			         			minlength : 'Le nom doit avoir au moins 2 caractères'
	 		       	   		  } ,
						prenom : { 	minlength : 'Le prenom doit avoir au moins 2 caractères' ,
			        				required : 'Le prenom est obligatoire'
			      				 }
					  },
		});

		$.validator.addMethod("regexp_phone",
		function(value, element){
			return this.optional(element) || /^\([0-9]{3}\)\s{1,}[0-9]{3}-[0-9]{4}$/.test(value);
		}, 'Format de l\'email invalide, il doit respecter le format (111) 111-1111.');

		$.validator.addMethod("regexp_code",
		function(value, element){
			return this.optional(element) || /^[a-zA-Z]{4}[0-9]{0,8}$/.test(value);
		}, 'Format du code permanent invalide, doit respecter la forme aaaa01234567');

		$.validator.addMethod("regexp_email",
		function(value, element){
			return this.optional(element) || /(\w|-|\.)@[a-zA-Z0-9\.-]{2,}\.[a-zA-Z]{2,6}$/.test(value);
		}, 'Ceci n\'est pas un email valide');
</script>
</body>
</html>
