<?php

	//this data sends info to the view
			
		$data['meta'] = array(
		        array('name' => 'description', 	'content' => 'Cornerstone Kitchen and Bath is...'),
		        array('name' => 'keywords', 	'content' => 'kitchen, remodeling, repair, cabinets, bath, bathrooms, bathroom, countertop, ...'),
				array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		    );
		    
		$data['title'] = $title;
		
		if($stylesheets != null){
			//load specific stylesheets are are only used on particular pages
			$data['stylesheets'] = $stylesheets;
		}else{
			$data['stylesheets'] = null;
		}
		if($js != null){
			//load specific stylesheets are are only used on particular pages
			$data['js'] = $js;
		}else{
			$data['js'] = null;
		}
	
	//call the the various sections that make up the page 
	//header needs the $data varible because of the meta information and the title for each page
	$this->load->view( 'includes/header', $data );
	
	$this->load->view( 'includes/menu' );
	
	//this loads the content for that page with the varibal set in the site controller
	$this->load->view( $main_content );
	
	$this->load->view( 'includes/footer' );
?>