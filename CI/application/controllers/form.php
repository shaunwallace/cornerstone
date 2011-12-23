<?php

class Form extends CI_Controller {
	
	public function index() {
		
	}
   
    function save()                                   
    {
        $data['title'] = "Cornerstone Kitchen and Bath | Contact Us";
        $data['main_content'] = "contact-landing-page";
        $data['stylesheets'] = array('css/contact_style.css', 'css/style.css');
        $data['js'] = array('js/maps.js');
        
        $this->load->model('Form_Model'); 
        
        $data['email'] = $this->input->post('email');  
         
        $data['emailsuccess'] = $this->Form_Model->send_email($data['email'] , 'hello'); 
        
        //pass the form values to the model to validate and store
        //$this->form_model->insert($data);
        
        $this->load->view('includes/template', $data);
    }
}
?>