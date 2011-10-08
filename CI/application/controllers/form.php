<?php

public class Form extends CI_Controller {
	
	public function index() {
		
	}
	
	public function save() {
		
		//get the post data
		$data = array(
		   	'name' 		=> 	$this->input->post('name'),
		   	'email' 	=> 	$this->input->post('email'),
		   	'phone' 	=> 	$this->input->post('phone'), 
			'message'	=>	$this->input->post('message')
		);
		
		//pass the form values to the model to validate and store
		$this->form_model->insert($data);
		
	}
}
?>