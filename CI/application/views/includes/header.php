<?php echo doctype( 'html5' ); ?>

<html lang=en>
<head>
	
	<?php echo meta($meta); ?>

	<title><?php echo $title ;?></title>
	
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:700'>
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Coustard'>
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Smythe'>
	
	<?php if($stylesheets != null ){
	
		foreach($stylesheets as $styles) {
			echo '<link rel="stylesheet" type="text/css" href="' . base_url($styles) . '"  media="screen">';
		}
	}
	?>
	
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js'); ?>"></script>
	
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
		
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) {return;}
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
	</script>
</head>
<body>
