<?php    if ( ! defined('BASEPATH')) exit('No direct script access allowed');   

class Form extends CI_Controller {
	
	public function index() {
		
	}
   
    function save()                                   
    {
        $data['title'] = "Cornerstone Kitchen and Bath | Contact Us";
        $data['main_content'] = "contact-landing-page";
        $data['stylesheets'] = array('css/style.css');
        $data['js'] = null;  
        
        $this->load->model('Form_Model'); 
        
        $data['email'] = $this->input->post('email');  
        $data['name'] = $this->input->post('name');  
        $data['phone'] = $this->input->post('phone');  
        $data['comments'] = $this->input->post('comments');          
         
        $data['emailsuccess'] = $this->Form_Model->send_email($data , 'hello'); 
        
        //pass the form values to the model to validate and store
        //$this->form_model->insert($data);
        
        $this->load->view('includes/template', $data);
    }
}
?>