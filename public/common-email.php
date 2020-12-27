<?php
	function common_email($fname,$email,$mobile,$message1,$fromname)
	{
		$message = '';
		 	$subject = "Crovell High Quality Accessories";
			 
			$message = 'Name : '.$fname .'<br/>'.'Mobile : '.$mobile.'<br/>'.'Email ID : '.$email. '<br/>'.'Message : '.$message1;
			
			require_once('PHPMailer-master/PHPMailerAutoload.php'); 
			require_once('PHPMailer-master/class.smtp.php'); 
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = "mail.crovell.in";
			$mail->Port = 465; // or 465, 587
			$mail->Username = 'emailer@crovell.in';	
			$mail->Password = '@#Mail2019';
			$mail->IsHTML(true);
			$mail->From=$email;
			/* $mail->From='info@strbd-tech.com'; */
			//sales@strbd-tech.com
			$mail->FromName = $fromname;
			//$mail->AddAddress('info@strbd-tech.com');
			$mail->AddAddress('info@crovell.in');
			$mail->setFrom('info@crovell.in', 'Crovell High Quality Accessories');
			$mail->addReplyTo('info@crovell.in', 'Crovell High Quality Accessories');
			$mail->Subject = $subject;
			$mail->IsHTML(true);
			$mail->Body = $message;
			// echo "<pre>";print_r($mail);die;
			if($mail->Send()){
				$responseArray = 1;
				return $responseArray;
				//echo "<script>window.location = '#contactus';</script>";
			 } else {
				$responseArray = 2;
				return $responseArray;
			 }
			
	}

	function common_email_user($email,$fromname)
	{
		 	$subject = "Thank you for contacting Crovell High Quality Accessories";
			$message = '<table style="width: 38%; font-family: arial; border:1px solid #e2e2e2; float: left; background: #f1f1f1;;
    margin-top: 15px;">
			<tr style="background: #fff">
				<td width="" colspan="2" style=";"><img src="https://www.crovell.in/images/logo.png"  width="100px;" style="margin-left: 8px" /></td>
				<!-- <td width="75%"><h2 style="margin-left: 20px;color: #525252;">Starboard Technology</h2></td> -->
			</tr>
			<tr>
				<td colspan="2" style="position: relative;margin-top:15px; margin-left: 8px; margin-bottom: 30px;"><img src="https://www.starboard-technology.com/images/emailer.png" width="400px;" style="margin-left: 8px;margin-top: 35px;margin-bottom: 5px;" />
				</td>
				
			</tr>
		</table>';
			 
			require_once('PHPMailer-master/PHPMailerAutoload.php'); 
			require_once('PHPMailer-master/class.smtp.php'); 
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = "mail.crovell.in";
			$mail->Port = 465; // or 587
			$mail->Username = 'emailer@crovell.in';	
			$mail->Password = '@#Mail2019';
			$mail->IsHTML(true);
			$mail->From='info@crovell.in';
			$mail->FromName = $fromname;
			$mail->AddAddress($email);
			$mail->setFrom('info@crovell.in', 'Crovell High Quality Accessories');
			$mail->addReplyTo('info@crovell.in', 'Crovell High Quality Accessories');
			$mail->Subject = $subject;
			$mail->IsHTML(true);
			$mail->Body = $message;
			if($mail->Send()){
				$responseArray = 1;
				return $responseArray;
				//echo "<script>window.location = '#contactus';</script>";
			 } else {
				$responseArray = 2;
				return $responseArray;
			 }
			
	}

?>