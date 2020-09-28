<?php	

use PHPMailer\PHPMailer\PHPMailer;

$result=" ";


	function sendOTP($email,$otp) {		

	require 'vendor/autoload.php';
		
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>". $otp;
		
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		//$mail->SMTPDebug = 0;
		
		
		
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 25;
		$mail->Username = 'aggtarun4@gmail.com';
		$mail->Password = 'tarun2000.';
		$mail->Host     = 'smtp.gmail.com';
		//$mail->Mailer   = 'OTP USER';
		
		
		
		$mail->SetFrom('aravind.shinja@gmail.com');
		$mail->AddAddress ($email);
		
		
		$mail->IsHTML(true);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
				
		
		
		$result = $mail->Send();
		
		return $result;
	}


?>