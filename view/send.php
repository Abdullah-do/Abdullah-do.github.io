<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_post["send"])) {

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'theegyptiaanmuseum@gmail.com';
$mail->Password = 'dkwucnzgfjulqnsd';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$mail->setFrom('theegyptiaanmuseum@gmail.com');

$mail->addAddress($_post["EMAIL"]);

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
}


?>