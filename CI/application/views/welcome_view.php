<?php echo doctype( 'html5' ); ?>

<html lang=en>
<head>

	<title>Cornerstone Kitchen and Bath | Cabinets in Atlanta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:700'>
	
	<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('footer');
	</script>
</head>
<body>

<div class="wrapper">
	<header>
			<hgroup>
				<h1><?php echo anchor('welcome/', 'Cornerstone Kitchen and Bath'); ?></h1>
			</hgroup>
	</header><!-- end header -->
	<nav>
			<ul>
				<li><?php echo anchor('welcome/', 'Home', 'title="home"'); ?></li>
				<li><?php echo anchor('about/', 'About Us', 'title="about us"'); ?></li>
				<li><?php echo anchor('products/', 'Products', 'title="products"'); ?></li>
				<li><?php echo anchor('gallery/', 'Gallery', 'title="gallery"'); ?></li>
				<li><?php echo anchor('contact/', 'Contact', 'title="contact"'); ?></li>
			</ul>
	</nav><!-- end nav -->
	<div class="banner">
		<?php echo img('images/banner_image_1.jpg'); ?>
	</div><!-- end banner -->
	<div id="content">
		<div id="content_text_wrapper">
			<h2>Who We Are</h2>
			<p>Cornerstone is a Company name used by the Ellis Family for over thirty years. Most of those years were spent in the Home building Industry. In 2004 we turned our attention to the cabinet Industry. Cornerstone Kitchens and Baths is our latest creation were we have developed a unique Showroom in Kennesaw Ga. to sell Quality Cabinets to contractors and the public. 
			</p>
			
			<img src="images/charleston_black1.jpg" class="thumbnail">
			<img src="images/newbury.jpg" class="thumbnail">

			<h2>What We Do</h2>
			<p>Our business was created based on a product line that is a Solid wood Cabinet with features not usually seen as standard. We are also able to accommodate any special needs our customers may have. We can call on several manufacturers and even create custom finishes on many of our products. Visit our showroom and let us save you money on your new Kitchen.</p>
		</div><!-- end content_text_wrapper -->
		<aside>
			<h2>Contact Us</h2>
			<form id="contact_form" method="post" action="<?php echo base_url(); ?>form/save">
				<fieldset id="form_details">	
					<input type="text" name="name" value="" id="name" placeholder="Name" required/> 
					<input type="email" name="email" value="" placeholder="Email" id="email" />
					<input type="email" name="conf_email" value="" placeholder="Confirm Email" id="conf_email" />
					<input type="tel" name="tel" value="" placeholder="Phone" id="phone" />	
				</fieldset><!--end user-details-->

				<input type="button" value="Send" name="button" id="add" class="submit" />
			</form>	
		</aside>
	</div><!-- end content -->
	<footer>
		<nav>
		</nav><!-- end nav -->
		<p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</footer><!-- end footer -->
</div><!--end wrapper -->

</body>
</html>