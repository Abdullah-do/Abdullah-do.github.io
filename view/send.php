<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_post["send"])){

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'theegyptiaanmuseum@gmail.com';
$mail->Password = 'wobkqjxnbpqagonl';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$mail->setFrom('theegyptiaanmuseum@gmail.com');

$mail->addAddress($_post["email"]);

$mail->isHTML(true);

$mail->Subject = $_post["Subject"];

$mail->Body = $_post["message"];

$mail->send();


echo
"
<script>
alert('sent Successfully');
document.location.href = 'feedback.php';
</script>
";
}else{
    echo
"
<script>
alert('faild');
document.location.href = 'feedback.php';
</script>
";
    
}


?>