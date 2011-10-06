<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		
		/*
		$data['meta'] = array(
		        array('name' => 'description', 'content' => 'Cornerstone Kitchen and Bath is...'),
		        array('name' => 'keywords', 'content' => 'kitchen, remodeling, repair, cabinets, bath, bathrooms, bathroom, countertop, ...'),
		        array('name' => 'content' => 'charset=utf-8')
		    );
		*/
		$this->load->view('welcome_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */