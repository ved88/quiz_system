
<?php

    if(isset($_POST['submit'])){
         $mailto = $_POST['mail_to'];
         $mailsub = $_POST['mail_sub'];
         $mailmsg =$_POST['mail_msg'];

 require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail ->IsSMTP();
$mail ->SMTPDebug = 1  ;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465;   //587
$mail ->IsHTML(true);
$mail ->Username = "email id ";
$mail ->Password ="pass";
$mail ->SetFrom("email");
$mail ->Subject = $mailsub;
$mail ->Body = $mailmsg;
$mail ->AddAddress($mailto);

        


if(!$mail->send())
{
    echo "mail not send";
}else{
    echo "mail send";
}
    }
?>