
 <?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 function sendMail_Request_status($email,$subject,$name,$ref){
 
 require '/usr/share/php/libphp-phpmailer/autoload.php';
 $mail = new PHPMailer;
 $mail->setFrom('contact@emails.i3.finance','motor.market');
 $mail->addAddress($email);
 
 $mail->Subject = $subject;
 $mail->Body = 'Hello! use PHPMailer to send email using PHP';
 $message="html";
 
 
 $mail->isHTML(TRUE);
 $mail->MsgHTML($message);
 $mail->CharSet="utf-8";
 
 $mail->IsSMTP();
 $mail->SMTPSecure = 'ssl';
 
 $mail->Host = 'smtp-relay.sendinblue.com';
 $mail->Username = 'james.smith@i3.finance';
 $mail->Password = 'SjEfUI7psm30TPLt';
 
 $mail->SMTPAuth = true;
 $mail->Port = 465;
 
 if(!$mail->send()) {
     echo 'Email is not sent.';
 
 
 } else {
 
   echo 'Email has been sent.';
 
 
 }
 }
 
 ?>
 