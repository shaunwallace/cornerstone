<?php 
	class Form_Model extends CI_Model {
		
		   public function insert($form_data) {
                //insert data
                $this->db->insert('mytable', $form_data); 
            }
            
            public function send_email($data, $message) 
            {
                $to      = "wade@cornerstonekandb.com" . "," . "ben@cornerstonekandb.com" ;  
                $message = 'A new contact has been made' . "\r\n" ;
                $message = 'Name: ' . $data['name'] . "\r\n" ;
                $message .= 'Email: ' . $data['email'] . "\r\n" ;  
                $message .= 'Phone: ' . $data['phone'] . "\r\n" ;        
                $message .= 'Comments: ' . $data['comments'] . "\r\n" ; 
                $subject = 'A new email lead has been made';
                $headers = 'From: noreply@cornerstonekitchensandbaths.com' . "\r\n" .
                    'Reply-To: noreply@cornerstonekitchensandbaths.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $mail_sent = @mail($to, $subject, $message, $headers);
                //$mail_sent = @mail( $to, $subject, $message, $headers ); 
                
                $result = $mail_sent ? "sent" : "failed";
                
                return $result;
            }
	}
?>
