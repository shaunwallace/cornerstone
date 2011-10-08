<?php 
	class Form extends CI_Model {
		
			public function insert($form_data) {
				//insert data
				$this->db->insert('mytable', $form_data); 
			}
	}
?>