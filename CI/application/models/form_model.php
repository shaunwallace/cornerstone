<?php 
	class Form_Model extends CI_Model {
		
		   public function insert($form_data) {
                //insert data
                $this->db->insert('mytable', $form_data); 
            }
            
            public function send_email($email, $message) 
            {
                $to      = $email;
                $subject = 'the subject';
                $message = 'hello';
                $headers = 'From: jeff.s.kumar@gmail.com' . "\r\n" .
                    'Reply-To: jeff.s.kumar@gmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $mail_sent = @mail($to, $subject, $message, $headers);
                //$mail_sent = @mail( $to, $subject, $message, $headers ); 
                
                $result = $mail_sent ? "sent" : "failed";
                
                return $result;
            }
	}
?>