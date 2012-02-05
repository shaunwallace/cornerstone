<body>
<div class="banner">
	<?php echo img('images/banner_image_2.jpg'); ?>
    <h1>Come find the best prices on cabinents in Atlanta.</h1> 
</div><!-- end banner -->
<div id="content">
	<div id="content_text_wrapper">
 
		<h2>Who We Are</h2>
		<p>Cornerstone is an Atlanta based company name used by the Ellis Family for over thirty years. We have specialized in the Home building Industry. In 2004 we turned our attention to selling cabinets in Atlanta, Georgia. Cornerstone Kitchens and Baths is our latest creation where we have developed a unique showroom in Kennesaw,Ga in the Atlanta Metro area to sell Quality Cabinets to contractors and the public. 
		</p>
		
		<a id="single_image" href="<?php echo base_url('images/charleston_black1_large.jpg"'); ?>><img src="<?php echo base_url('images/charleston_black1.jpg'); ?>" class="thumbnail" alt='Some information on this style of cabinet'></a>
		<a id="single_image" href="<?php echo base_url('images/newbury_large.jpg"'); ?>><img src="<?php echo base_url('images/newbury.jpg'); ?>" class="thumbnail"></a>

		<h2>What We Do</h2>
		<p>Our business was created based on a product line that is a solid wood cabinet with features not usually seen as standard. We are able to cater to the special needs of our customers. We can call on several manufacturers and even create custom finishes on many of our products. Visit our showroom and let us save you money on your new kitchen.</p>
	</div><!-- end content_text_wrapper -->
	<aside>
		<h2>Want A Quote?</h2>
		<form id="contact_form" method="post" action="<?php echo site_url(); ?>/form/save">
			<fieldset id="form_details">	
				<input type="text" name="name" value="" id="name" placeholder="Name" required/> 
				<input type="email" name="email" value="" placeholder="Email" id="email" required/>
				<input type="email" name="conf_email" value="" placeholder="Confirm Email" id="conf_email" required/>
				<input type="tel" name="phone" value="" placeholder="Phone" id="tel" required/>	
				
			</fieldset><!--end user-details-->
			<textarea form="contact_form" placeholder="Add Your Comments" name="comments"></textarea>
			<input type="submit" value="Send" name="button" id="add" class="submit" type="submit"/>
		</form>	
	</aside>
</div><!-- end content -->