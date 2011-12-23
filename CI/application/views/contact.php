   

<div id="content">
 
	<aside class="contact_form">
		<h2>For more Info</h2>
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
	<!--
	<aside class="contact_form">
		<h2>Office Address</h2>
		<p>Conerstone Kitchen and Bath<p>
		<p>840 Ernest W. Barrett Pkwy</p>
		<p>Ste 584 Kennesaw, GA 30144</p>
		:: Tel 770-422-5077
	</aside>
	-->
	
</div><!-- end content -->
<aside>
<h2>Visit our Showroom</h2>
 <div id="map_canvas"></div>
 </aside>