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
	}
	
	public function contact()
	{
		$data['title'] = "Cornerstone Kitchen and Bath | Contact Us";
		$data['main_content'] = "contact";
		$data['stylesheets'] = array('css/contact_style.css', 'css/style.css');
		$data['js'] = array('js/maps.js');
		
		$this->load->view('includes/template', $data);
	}
	
    public function about() 
    {
        $data['title'] = "Cornerstone Kitchen and Bath | Products";
        $data['main_content'] = "about";
        $data['stylesheets'] = array('css/style.css');
        $data['js'] = array('js/products.js');                                                   
        $this->load->view('includes/template', $data);
    }
    
	public function products()
	{
		$data['title'] = "Cornerstone Kitchen and Bath | Products";
		$data['main_content'] = "products";
		$data['stylesheets'] = array('css/products_style.css', 'css/style.css');
		$data['js'] = null;
		
		$this->load->view('includes/template', $data);
	}
    
    public function gallery()
    {
        $data['title'] = "Cornerstone Kitchen and Bath | Products";
        $data['main_content'] = "gallery";
        $data['stylesheets'] = array('css/galleriffic-2.css', 'css/style.css');
        $data['js'] = array('js/jquery.galleriffic.js');
        
        $this->load->view('includes/template', $data);
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */