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
		
		
		
		$data['meta'] = array(
		        array('name' => 'description', 'content' => 'Cornerstone Kitchen and Bath is...'),
		        array('name' => 'keywords', 'content' => 'kitchen, remodeling, repair, cabinets, bath, bathrooms, bathroom, countertop, ...'),
				array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		    );
		
		
		$data['title'] = "Cornerstone Kitchen and Bath | Cabinets in Atlanta";
		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('content_home');
		$this->load->view('footer');
		//$this->load->view('welcome_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */