<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_library{

	public function send_email($arr){
        // load library
        $CI =& get_instance();
        $CI->load->library('phpmailer_lib');


		$mail = $CI->phpmailer_lib->load();
		$mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'samnsimson@gmail.com';                 // SMTP username
        $mail->Password = 'S@mS!mson!';                           // SMTP password
        $mail->SMTPSecure = 'tls';  
        $mail->SMTPAutoTLS = false;                          
        $mail->Port = 587;
        $mail->setFrom('info@boxigo.com', 'Boxigo');
        $mail->addReplyTo('info@boxigo.com', 'Boxigo');
        $mail->addAddress($arr['to']);
        $mail->Subject = $arr['subject'];
        $mail->isHTML(true);
        $mailContent = $arr['body'];
        $mail->Body = $mailContent;
        $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
        return ($mail->send()) ? true : false;
		
	}
}
?>