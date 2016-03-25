<?php

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$roomname = $_POST['roomname'];

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.live.com";
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "thebnbhub@outlook.com";
$mail->Password = "Pedro123";
$mail->setFrom('thebnbhub@outlook.com');
$mail->addAddress($email);
$mail->addCCAddress($email);
$mail->Subject = 'Booking Confirmation';
//$mail->msgHTML(file_get_contents('contents.html'), dirname(testpro));
$mail->Body = 'Room Name :'.$roomname."\n".'Name: '.$title.' '.$firstname.' '.$surname."\n".'Your Email: '.$email."\n".'Your telephone: '.$telephone;
//$mail->addAttachment('');

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Welcome to the Booking Confirmation Page!!!<p>";
    echo "A confirmation email has been sent!<p>";
    echo "Here are your Booking details...<p>";
    echo "Room Name :".$roomname."\n"."Name: ".$title." ".$firstname." ".$surname."\n"."Your Email: ".$email."\n"."Your telephone: ".$telephone;
    echo "<a href='customerinfo.php'>Return to the Booking Page</a>";
}

?>


