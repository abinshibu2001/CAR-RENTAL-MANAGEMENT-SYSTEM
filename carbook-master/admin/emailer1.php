<?php
session_start();
require 'PHPMailer/PHPMailerAutoload.php';
$email=$_GET["email"];
$notice="Your Booking has been Rejected";
senmail($email,"Notification from toy wheel car service",$notice);
	




function senMail($to,$subject,$msgBodyContent){

    $mail = new PHPMailer;

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'abinshibu2696@gmail.com';          // SMTP username
    $mail->Password = 'abinshibu123'; 					// SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                 // TCP port to connect to

    $mail->setFrom('rcssctrms@gmail.com', 'RCSS CTRM System');
    $mail->addReplyTo('noreplay-rcssctrms@gmail.com', 'RCSS CTRM System');
    $mail->addAddress($to);   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->debug=2;
    $mail->isHTML(true);  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $msgBodyContent;

    if(!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        return FALSE;
    } else {
        return TRUE;
    }
}
echo "<h1>Mail send successfully</h1>";
echo '<META http-equiv="refresh" content="1;index.php">';
?>
