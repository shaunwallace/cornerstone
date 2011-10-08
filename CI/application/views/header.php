<?php echo doctype( 'html5' ); ?>

<html lang=en>
<head>
	
	<?php echo meta($meta); ?>

	<title><?php echo $title ;?></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:700'>
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Coustard'>
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Smythe'>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  media="screen">

	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	
	<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('footer');
	</script>
	
	<script>
		$(document).ready(function() {

			/* This is basic - uses default settings */

			$("a#single_image").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	true,
				'hideOnContentClick': true
			});
		});
	</script>
</head>
<body>