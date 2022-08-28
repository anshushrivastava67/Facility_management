<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "anshushri0207@gmail.com";
$mail->Password   = "oxmenkitgurpgczc";
$mail->IsHTML(true);
$mail->AddAddress("mayank.tiwari9797@gmail.com", "mayank");
$mail->SetFrom("anshushri0207@gmail.com", "Anshu");
$mail->Subject = "Booking";
$content = "<b>Thank You for Booking<br> Your Booking is confirmed</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {  
  echo "Error while sending Email.";
  
} 
else 
{
    echo "<script>
    window.location.href ='index.php';
    </script>";
}
?>
