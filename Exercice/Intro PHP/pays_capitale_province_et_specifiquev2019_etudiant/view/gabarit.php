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
		<link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
		<script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
		<script src="jquery-ui-1.12.1/jquery-ui.js"></script>
	</head>
	<body>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5">
		  </div>
		  <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5">
		  	<?php //require('view_menu.php'); ?>
		  </div>
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
			<script>
				$( "#accordion" ).accordion();
			</script>
		</div>
	</body>
</html>
