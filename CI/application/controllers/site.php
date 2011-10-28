<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
		
		$data['title'] = "Cornerstone Kitchen and Bath | Cabinets in Atlanta";
		$data['main_content'] = "home";
		$data['stylesheets'] = array('css/style.css', 'css/jquery.fancybox-1.3.4.css');
		$data['js'] = array('js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js', 'js/fancybox_script.js');
		
		$this->load->view('includes/template', $data);
		
		//load the relevent blocks of the page the will be put in order of the calls below
		/*
		$this->load->view('includes/header', $data);
		$this->load->view('includes/menu');
		$this->load->view('content_home');
		$this->load->view('includes/footer');
		*/
	}
	
	public function contact()
	{
		$data['title'] = "Cornerstone Kitchen and Bath | Contact Us";
		$data['main_content'] = "contact";
		$data['stylesheets'] = array('css/contact_style.css', 'css/style.css');
		$data['js'] = array();
		
		$this->load->view('includes/template', $data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */