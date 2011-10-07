<div class="banner">
	<?php echo img('images/banner_image_1.jpg'); ?>
</div><!-- end banner -->
<div id="content">
	<div id="content_text_wrapper">
		<h2>Who We Are</h2>
		<p>Cornerstone is a Company name used by the Ellis Family for over thirty years. Most of those years were spent in the Home building Industry. In 2004 we turned our attention to the cabinet Industry. Cornerstone Kitchens and Baths is our latest creation were we have developed a unique Showroom in Kennesaw Ga. to sell Quality Cabinets to contractors and the public. 
		</p>
		
		<a id="single_image" href="images/charleston_black1_large.jpg"><img src="images/charleston_black1.jpg" class="thumbnail" alt='Some information on this style of cabinet'></a>
		<a id="single_image" href="images/newbury_large.jpg"><img src="images/newbury.jpg" class="thumbnail"></a>

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
				<input type="tel" name="tel" value="" placeholder="Phone" id="tel" />	
				
			</fieldset><!--end user-details-->
			<textarea form="contact_form" placeholder="Add Your Comments"></textarea>
			<input type="button" value="Send" name="button" id="add" class="submit" />
		</form>	
	</aside>
</div><!-- end content -->