<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titre ?></title>


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
<!-- attention au conflit avec le lien jquery_validate.min.js, c'est pourquoi il faut le déplacer avant-->
<script <?php echo  $lien_ajax ?>></script>
<script <?php echo $gestion_ajax ?> ></script>


<script type="text/javascript" src="jquery-validation-1.15.0/lib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery-validation-1.15.0/dist/localization/messages_fr.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
label.error {
	color: red;
}
</style>
</head>
<body>
<div class="pure-g">
    	<div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
    	</div>
        <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5">
        	<article> 
            	<H1> <?php echo $titre ?></H1>
            </article>
    	</div>  
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-3-5 form-box"> 
		<?php echo $contenu ?>   <!-- Élément spécifique -->		
	</div>
</div>
</body>
</html>